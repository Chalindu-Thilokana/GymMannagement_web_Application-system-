

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
@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">
    <body>
<!-- Member Registration Modal -->
<div id="memb" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Payment DETAILS</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="">
                    @csrf


                    
                    
                        <div class="input-box1">
                            <label for="first-name">Full Name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" required>
                        </div>
                        <!--
                        <div class="input-box1">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" required>
                        </div> -->
                        <div class="input-box1">
                            <label for="amount">Ammount</label>
                            <input type="" class="form-control" id="amount" name="amount" placeholder="100.00" oninput="validateAmount(this)" required> 
                        </div>
                        
                       
                        
                       
                       
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Check me out</label>
                        </div>
                        <br>
                        <br>
                        <div class="input-box1">
                            <a href="#" class="btn-custom">close</a>
                        </div>

                        <br>
                        <br>
                    
                    <!-- form fields here -->
                    <div class="modal-footer">
                        <a href="#" class="btn-danger close">pay</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </body>
</section>
</html>