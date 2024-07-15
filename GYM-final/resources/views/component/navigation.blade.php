<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titan Fitness Center</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('indexmy/index.css') }}">
    <link rel="stylesheet" href="{{ asset('indexmy/BMI.css') }}">
    <link rel="stylesheet" href="{{ asset('indexmy/galery.css') }}">
    <link rel="stylesheet" href="{{ asset('registermy/member-re-from.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <style>
        /* Navigation styles */



        /* Modal styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
            overflow-y: auto;
            padding-top: 10em;
        }


        .custom-modal {
            background-color: #1f2125;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            overflow: hidden;
            position: relative;
            animation: fadeIn 0.3s ease;
            max-height: 90vh;
        }

        .custom-modal-header {
            background-color: #56ecea;
            color: white;
            padding: 15px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .custom-modal-body {
            padding: 30px;
            overflow-y: auto;
            max-height: calc(90vh - 100px);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #56ecea;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: #f5f5f5;
            border: none;
            border-radius: 5px;
            transition: border-color 0.3s;
            box-shadow: none;
        }

        .form-control:focus {
            outline: none;
            border-color: #56ecea;
        }

        .btn-register {
            background-color: #56ecea;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-register:hover {
            background-color: #348887;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: #aaa;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav>
        <div class="nav__logo">
            <a href="#"><img src="assets/logo.png" alt="logo" /></a>
        </div>
        <ul class="nav__links">
            <li class="link"><a href="#header">Home</a></li>
            <li class="link"><a href="#About">About Us</a></li>
            <li class="link"><a href="#explore">Program</a></li>

            <li class="link"><a href="#contact">Contact Us</a></li>
            <li class="link dropdown">
                <a href="#" class="dropdown-toggle ">Register</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="#" onclick="showRegistrationModal()">Member</a></li>
                    <li class="dropdown-item"><a href="#" onclick="openModal()">Trainer</a></li>

                </ul>
            </li>
        </ul>
        {{-- <form class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form> --}}
        <a href="{{route('login')}}" class="btn">Login</a>
    </nav>




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
    <!-- Modal Popup -->
    <div class="overlay" id="modalOverlay" style="display: none;">
        <div class="custom-modal">
            <!-- Modal Header -->
            <div class="custom-modal-header">
                <h2>Member Registration Form</h2>
                <span class="close" onclick="hideRegistrationModal()">&times;</span>
            </div>

            <!-- Modal Body with Form -->
            <div class="custom-modal-body">
                <form class="mform" action="{{ route('member_reg') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="full_name" required>
                    </div>
                    <!-- <div class="form-group">
                      <label for="last-name">Last Name</label>
                      <input type="text" class="form-control" id="last-name" name="last-name" required>
                  </div> -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10"
                            max="120" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="mobile_phone_number"
                            pattern="\d{10}" required>
                    </div>
                    {{-- <div class="form-group">
                      <label for="land-phone">Land Phone Number</label>
                      <input type="tel" class="form-control" id="land-phone" name="land_phone_number" pattern="\d{10}" required>
                  </div> --}}
                    <div class="form-group">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight" min="30"
                            max="200" step="0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="height">Height (cm)</label>
                        <input type="number" class="form-control" id="height" name="height" min="120"
                            max="200" step="0.1" required>
                    </div>
                    <!--





                      'full_name',
        'last_name',
        'age',
        'email',
        'password',
        'gender',
        'address',
        'weight',
        'height',
        'membership_type_id',
        'mobile_phone_number',
        'land_phone_number',
        'user_id',
        'trainer_id',
        'perpose',
                  <div class="form-group">
                    
                      <label for="membershipType">Membership Type</label>
                      <select class="form-control" id="membershipType" name="membershipType" required>
                          <option value="" disabled selected></option>
                          <option value="basic">Basic</option>
                          <option value="premium">Premium</option>
                          <option value="vip">VIP</option>
                      </select>
                  </div> -->


                  <div class="form-group">
                        
                    <label for="membershipType">Membership Type</label>
                    <select class="form-control" id="membershipType" name="membership_type_id" required>
                        <option value="" disabled selected></option>
                        @foreach ($membership_types as $membership_type)
                          <option value="{{$membership_type->membership_type}}">{{$membership_type->membership_type}}</option>
                        @endforeach
                       
                    </select>
                    <div class="form-group">
                        <label for="textarea">Enter your purpose:</label>
                        <textarea id="textarea" class="form-control" name="perpose" rows="4" cols="50" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    
                    </div> 
                    <div class="form-group">
                        <button type="submit" class="btn btn-register btn-block">REGISTER</button>

                    </div>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <!-- Your existing sections here -->

    <script>
        function showRegistrationModal() {
            document.getElementById("modalOverlay").style.display = "flex";
        }

        function hideRegistrationModal() {
            document.getElementById("modalOverlay").style.display = "none";
        }
    </script>





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





    <!-- trainer register -->
    <div class="overlay" id="modalOverlayTrainer" style="display: none;">
        <div class="custom-modal">
            <!-- Modal Header -->
            <div class="custom-modal-header">
                <h2>Trainer Registration Form</h2>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>

            <!-- Modal Body with Form -->
            <div class="custom-modal-body">
                <form class="mform" action="{{ route('trainer_reg') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first-name">full name</label>
                        <input type="text" class="form-control" id="first-name" name="full_name" required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10"
                            max="80" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="membershipType">experence</label>
                        <select class="form-control" id="experence" name="work_experience" required>
                            <option value="" disabled selected></option>
                            <option value="one">One year</option>
                            <option value="two">Two years</option>
                            <option value="more">More than two years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trainingCareers">Training Careers</label>
                        <select class="form-control" id="trainingCareers" name="traning_careers" required>
                            <option value="" disabled selected></option>
                            <option value="bodybuilding">Bodybuilding</option>
                            <option value="fitness-training">Fitness Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="mobile_phone_number"
                            pattern="\d{10}" required>
                    </div>
                    {{-- <div class="form-group">
                  <label for="land-phone">Land Phone Number</label>
                  <input type="tel" class="form-control" id="land-phone" name="land_phone_number" pattern="\d{10}" required>
              </div> --}}
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-register btn-block">REGISTER</button>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <script>
        function openModal() {
            document.getElementById("modalOverlayTrainer").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("modalOverlayTrainer").style.display = "none";
        }
    </script>
