

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



@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">



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
<body>
<div id="member_approw_Modal" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">assigen trainer</h4>
                <span class="close">&times;</span>
            </div>
            <br>
            <br>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="{{route('member_aprove', $member->id)}}" method="POST">
                    @csrf
                   
                    <!--
                    <div class="input-box1">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div> -->
                    
                    <div class="input-box1">
                        <input type="hidden" name="name" value="{{$member->full_name}}" >
                        <input type="hidden" name="email" value="{{$member->email}}" >
                        <input type="hidden" name="new_userid" value="{{$member->id}}" >

                        <input type="hidden" name="password" value="{{$member->password}}" >


                        <label for="trainingCareers">trainers</label>
                        <select class="form-control" id="trainingCareers" name="trainer_id">
                            <option value="" disabled selected></option>
                            @foreach($trainers as $trainer)
                            <option value="{{ $trainer->id }}">{{ $trainer->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                
                    <br>
                    <div class="input-box1">
                        <button type="submit" class="btn btn-primary btn-custom">approwel</button>
                        </div>
                    <br>
                    <div class="modal-footer">
                        <a href="{{route('admin_show')}}" class="btn-danger">close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--
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
    //initializeModal('member_update_Modal', 'openMemberModalBtn');

    // Initialize the trainer registration modal
    initializeModal('member_approw_Modal', 'openMemberapprowModalBtn');
</script>
-->
</body>
</body>
</html>