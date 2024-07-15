
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
<body>

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


<!-- Member Registration Modal -->
<div id="" class="m">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Trainer</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="{{route('trainer_update_data', $trainer->id)}}" method="POST">
                    @csrf
                    
                    <div class="input-box1">
                        <label for="first-name">Full Name</label>
                        <input type="text" class="form-control" id="first-name" name="full_name" required value="{{$trainer->full_name}}">
                    </div>
                    <!--
                    <div class="input-box1">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div> -->
                    <div class="input-box1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{$trainer->email}}">
                    </div> 
                    <div class="input-box1">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10" max="120" required value="{{$trainer->age}}">
                    </div>
                    <div class="input-box1">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required value="{{$trainer->address}}">
                    </div>
                    <div class="input-box1">
                        <label for="membershipType">experence</label>
                        <select class="form-control" id="experence" name="work_experience" required value="{{$trainer->work_experience}}">
                            <option value="" disabled selected></option>
                            <option value="one" {{ $trainer->work_experience == 'one' ? 'selected' : '' }}>One year</option>
                            <option value="two" {{ $trainer->work_experience == 'two' ? 'selected' : '' }}>Two years</option>
                            <option value="more" {{ $trainer->work_experience == 'more' ? 'selected' : '' }}>More than two years</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required >
                            <option value="" disabled selected></option>
                            <option value="male" {{ $trainer->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $trainer->gender == 'female' ? 'selected' : '' }}>Female</option>
                           
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="trainingCareers">Training Careers</label>
                        <select class="form-control" id="trainingCareers" name="traning_careers" required>
                            <option value="" disabled selected></option>
                            <option value="bodybuilding" {{ $trainer->traning_careers == 'bodybuilding' ? 'selected' : '' }}>Bodybuilding</option>
                            <option value="fitness-training"  {{ $trainer->traning_careers == 'fitness-training' ? 'selected' : '' }}>Fitness Training</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="mobile_phone_number" pattern="\d{10}" required value="{{$trainer->mobile_phone_number}}">
                    </div>
                   {{-- <div class="input-box1">
                        <label for="land-phone">Land Phone Number</label>
                        <input type="tel" class="form-control" id="land-phone" name="land-phone" pattern="\d{10}" required>
                    </div> --}}



                 
               
                   {{-- <div class="input-box1">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required value="{{$trainer->}}">
                    </div> --}}
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <br>
                    <div class="input-box1">
                        <button type="submit" class="btn btn-primary btn-custom">UPDATE</button>
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




</body>
</section>
</html>







<!--




<script>
    function initializeModal(modalClass, openBtnClass) {
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
   // initializeModal('member_update_Modal', 'openMemberModalBtn');

    // Initialize the trainer registration modal
    initializeModal('trainer_update_Modal', 'openTrainerModalBtn');
</script>
