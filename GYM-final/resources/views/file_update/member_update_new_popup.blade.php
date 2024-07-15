

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
    
<div id="" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Member</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="{{route('member_update', $member->id)}}" method="post">
                    @csrf
                    <div class="input-box1">
                        <label for="first-name">full name</label>
                        <input type="text" class="form-control" id="first-name" name="full_name" required value="{{$member->full_name}}">
                    </div>
                    <!--
                    <div class="input-box1">
                        <label for="last-name">Last Name</label>





                        'full_name',
        'last_name',
        'age',
        'email',
        'password',
        'gender',
        'address',
        'BMI',
        'weight',
        'height',
        'membership_type_id',
        'mobile_phone_number',
        'land_phone_number',
        'user_id',
        'trainer_id',
        'perpose',
    ];
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div> -->
                    
                    <div class="input-box1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{$member->email}}">
                    </div> 
                    <div class="input-box1">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10" max="120" required value="{{$member->age}}">
                    </div>
                    <div class="input-box1">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required value="{{$member->address}}">
                    </div>
                    <div class="input-box1">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required value="{{$member->gender}}">
                            <option value="" disabled selected></option>
                            <option value="male" {{ $member->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $member->gender == 'female' ? 'selected' : '' }}>Female</option>
                           
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="mobile_phone_number" pattern="\d{10}" required value="{{$member->mobile_phone_number}}">
                    </div>
                  {{--  <div class="input-box1">
                        <label for="land-phone">Land Phone Number</label>
                        <input type="tel" class="form-control" id="land-phone" name="land_phone_number" pattern="\d{10}" required value="{{$member->land_phone_number}}">
                    </div> --}}
                    <div class="input-box1">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight" min="35" max="200" step="0.1" required value="{{$member->weight}}">
                    </div>
                    <div class="input-box1">
                        <label for="height">Height (cm)</label>
                        <input type="number" class="form-control" id="height" name="height" min="120" max="200" step="0.1" required value="{{$member->height}}">
                    </div>
                   {{-- <!--<div class="input-box1">
                        <label for="membershipType">Membership Type</label>
                        <select class="form-control" id="membershipType" name="membership_type_id" required >
                            <option value="" disabled selected></option>
                            @foreach($membership_types as $type)
                            <option value="basic"  value="{{ $type->id }}" {{ $member->membership_type_id == $type->id ? 'selected' : '' }}>
                                {{ $type->name }} basic</option>
                                <option value="gold"  value="{{ $type->id }}" {{ $member->membership_type_id == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}gold</option>
                               </select>
                               <option value="primium"  value="{{ $type->id }}" {{ $member->membership_type_id == $type->id ? 'selected' : '' }}>
                               {{ $type->name }}primium</option>

                               @endforeach
                    </div> -->  --}}
                    <div class="input-box1">
                        <label for="textarea">Enter your purpose:</label>
                        <textarea id="textarea" class="form-control" name="perpose" rows="4" cols="50"></textarea value="{{$member->perpose}}">
                    </div>
                  <!--  <div class="input-box1">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div> -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <br>

                    <div class="input-box1">
                        <button class="btn btn-primary btn-custom" type="submit">UPDATE</button>
                        
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
    document.addEventListener('DOMContentLoaded', (event) => {
        function initializeModal(modalClass, openBtnClass) {
            const modal = document.querySelector(`.${modalClass}`);
            const openModalBtns = document.querySelectorAll(`.${openBtnClass}`);
            const closeBtns = modal.querySelectorAll(".close");
    
            if (!modal) {
                console.error(`Modal with class ${modalClass} not found`);
                return;
            }
    
            if (openModalBtns.length === 0) {
                console.error(`No buttons with class ${openBtnClass} found`);
                return;
            }
    
            console.log('Initializing modal');
    
            // Open modal when any button with the specified class is clicked
            openModalBtns.forEach(openModalBtn => {
                openModalBtn.addEventListener('click', () => {
                    console.log('Open modal button clicked');
                    modal.style.display = "block";
                });
            });
    
            // Close modal when close button is clicked
            closeBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    console.log('Close button clicked');
                    modal.style.display = "none";
                });
            });
    
            // Close modal when clicking outside of the modal content
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    console.log('Clicked outside modal');
                    modal.style.display = "none";
                }
            });
        }
    
        // Initialize the member registration modal
        initializeModal('member_update_Modal', 'openMemberModalBtn');
    });
    </script>
    

<script>
function initializeModal(modalClass, openBtnClass) {
    const modal = document.querySelector(`.${modalClass}`);
    const openModalBtns = document.querySelectorAll(`.${openBtnClass}`);
    const closeBtns = modal.querySelectorAll(".close");

    // Open modal when any button with the specified class is clicked
    openModalBtns.forEach(openModalBtn => {
        openModalBtn.addEventListener('click', () => {
            modal.style.display = "block";
        });
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
initializeModal('member_update_Modal', 'openMemberModalBtn');

// Initialize the trainer registration modal
//initializeModal('trainer_update_Modal', 'openTrainerModalBtn');

</script>
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
    initializeModal('member_update_Modal', 'openMemberModalBtn');

    // Initialize the trainer registration modal
    initializeModal('trainer_update_Modal', 'openTrainerModalBtn');
</script>
-->

</body>
</section>
</html>