


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('dashbordmy/table.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbordmy/popup.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <style>
        /* Add additional responsive styles here if necessary */
    </style>
</head>
f



@include('dashbord.dashbord-slidebar')
@include('sweetalert::alert')

@if ($errors->any())
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'There were some problems with your input.',
        html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
    });
</script>
@endif
<section class="home"  id="home">
<!-- Member Registration Modal -->
<div id="membe" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Payment DETAILS</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="{{route('pay_save',)}}" method="post">
                    @csrf


                    
                    
                        <div class="input-box1">
                            <label for="first-name">Full Name</label>
                            <input type="text" class="form-control" id="first-name" name="name" required value="{{$member->full_name}}">
                        </div>
                        <!--
                        <div class="input-box1">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" required>
                        </div> -->
                        <div class="input-box1">
                            <label for="amount">amount</label>
                            <input type="number" class="form-control" id="amount" name="price" placeholder="100.00"  required {{}}> 
                        </div>
                       
                        
                       
                       
                        
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Check me out</label>
                        </div>
                        <br>
                        <br>
                        <div class="input-box1">
                            <button class="btn-custom">SAVE</button>
                        </div>

                        <br>
                        <br>
                    
                    <!-- form fields here -->
                    <div class="modal-footer">
                        <a href="#"class="btn-danger close">CLOSE</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function validateAmount(input) {
      var regex = /^\d+(\.\d{1,2})?$/;
      if (!regex.test(input.value)) {
        alert("Please enter a valid numerical amount.");
        input.value = "";
      }
    }
  </script>
{{--
<script>
    function initializeModal(modalId, openBtnId) {
        const modal = document.getElementById(modalId);
        const openModalBtn = document.getElementById(openBtnId);
        const closeBtns = modal.querySelectorAll(".close");

        // Open modal when button is clicked
        openModalBtn.addEventListener('click', () => {
            modal.style.display = "block";
        });

        // Close modal when close button is clicked
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.style.display = "none";
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }

    // Initialize the member registration modal
    initializeModal("member_reg_Modal", "openModalBtn");

    // Initialize the trainer registration modal
    //initializeModal("trainer_reg_Modal", "openModalBtnup");
</script>
 --}}
</section>