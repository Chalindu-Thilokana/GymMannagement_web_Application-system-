<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('dashbordmy/sidebar.css') }}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>





    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                    <img src="/assets/logo.png" alt="logo" /> 

                </span>

                <div class="text logo-text">
                    <span class="name">TITAN FITNESS </span>
                    <span class="profession">{{Auth::user()->name}}</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                
               
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="{{url('dashboard')}}">
                                <i class='bx bx-home-alt icon'></i>
                                <span class="text nav-text">Profile Details</span>
                            </a>
                        </li>

                       @if (Auth::user()->role === 'trainer')
                       
                    
                        <li class="nav-link">
                            <a href="{{route('shedule')}}">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">schedule</span>
                            </a>
                        </li>
                       @endif

                       @if (Auth::user()->role === 'member')     
                        <li class="nav-link">
                            <a href="{{route('chart', Auth::user()->member_id)}}"> {{-- mama damme user detai hight weight update ekat--}}
                                <i class='bx bx-bar-chart-alt-2 icon'></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>

                        
                        @endif

                        
                        @if (Auth::user()->role === 'admin')     

                        <li class="nav-link">
                            <a href="{{route('attendence')}}">
                                <i class='bx bx-user icon'></i>
                                <span class="text nav-text">Admin Dashbord</span>
                            </a>
                        </li>
               


                <li class="nav-link">
                    <a href="{{route('admin_show')}}">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        
                        <span class="text nav-text">user mannagement</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{route('paym')}}">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Member payments</span>
                    </a>
                </li>
             {{--   <li class="nav-link">
                    <a href="{{url('pay')}}">
                        <i class='bx bx-money icon'></i>
                        <span class="text nav-text">trainer payments</span>
                    </a>
                </li> --}}

                @endif
 
                </ul>
              

            </div>

            <div class="bottom-content">
                <li class="">
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf

                        <button>
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Logout</span>
                        </button>
                    </form>

                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>


    </nav>





    <section class="home" id="home">
        <div class="text">Dashboard Sidebar</div>
    </section>





    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})
searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})
modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>

</html>
