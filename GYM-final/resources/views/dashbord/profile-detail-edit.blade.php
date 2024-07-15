
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('dashbordmy/profile.css') }}">
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('dashbordmy/table.css') }}">
        
        <link rel=  "stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
        @vite('resources/css/app.css')


        <link rel="stylesheet" href="{{ asset('dashbordmy/popup.css') }}">
        <link rel="stylesheet" href="{{ asset('dashbordmy/table.css') }}">

    <link rel="stylesheet" href="{{ asset('dashbordmy/popup.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">


        
</head>

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
@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">
    <div class="container p-5">
        <div class="row">
            <!-- Left Column: Chart -->
            <div class="col-md-6">
                @include('dashbord.mem-chart')

              
                <div class="attendance-container">
                    <h2>Attendance Schedule</h2>
                    <form class="attendance-form" id="attendance-form" action="{{route('attendence_mark')}}" method="POST">
                        @csrf
                        <div class="attendance-form-group">
                            <label class="attendance-label" for="attendance-day">Select Day:</label>
                            <select class="attendance-select" id="attendance-day" name="day">
                                <option value="upper_body ">upper body day</option>
                                <option value="lower_body ">lower body day</option>
                                <input type="hidden" name="member_id" value="{{$user_id = Auth::user()->id}}">
                                <input type="hidden" name="name" value="{{$name = Auth::user()->name}}">
                                
                                
                            </select>
                        </div>
                       
                        <button type="submit" id="" class="attendance-button">submit</a>
                    </form>
                </div>
                
                
            </div>

            <!-- Right Column: Profile Edit Form -->
            <div class="col-md-6">
                <section class="member" id="">
                    <form class="mfrom" action="{{route('mem_detail_update', $member->id)}}" method="POST">
                        @csrf
                        <h2>Edit profile details</h2>


                        
                      
                        <div class="input-box2">
                            <input type="number" class="form-reg-mem" id="weight" name="weight" min="35" max="200" step="0.1" required value="{{$member->weight}}">
                            <label for="weight" >Weight (kg)</label>
                        </div>
                              
                        <div class="input-box2">
                            <input type="number" class="form-reg-mem" id="height" name="height" min="120" max="200" step="0.1" required  value="{{$member->height}}">
                            
                            <label for="height">Height (cm)</label>
                        </div>
                      
                        <div class="input-box2">
                            <input type="tel" class="form-reg-mem" id="age" name="age" required  value="{{$member->age}}">
                            <label for="age">age</label>
                        </div>

                     

                 

                        <div class="input-box2">
                            <button type="submit" class="btn2">Update</button>
                        </div>
                    </form>

                    <script>
                        document.querySelectorAll('label').forEach(label => {
                            label.innerHTML = label.innerText.split('').map((letter, i) =>
                                `<span style="transition-delay:${i * 50}ms">${letter}</span>`
                            ).join('');
                        });
                    </script>
                    
                </section>
               

                
            </div>

        </div>      
        
                
               

                <table class="table table-striped" id="shedule" style="width: 100%">
                    <caption class="table-title">shedule</caption>
                    
                   
                    <thead class="table-dark">
                       
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">trainer</th>
                            <th scope="col">helth condition</th>
                            <th scope="col">bmi</th>
                            <th scope="col">valid_time</th>
                            <th scope="col">view</th>
                        </tr>
                     
                        
                    </thead>
                    <tbody>
                        @foreach ($shedules as $shedule)
                        @if (Auth::user()->member_id == $shedule->member_id )
                        <tr>
                            <th scope="row">{{$shedule->id}}</th>
                            <td>{{ $shedule->member->trainer->full_name}}</td>
                            <td>{{$shedule->helth_condition}}</td>
                            <td>{{$shedule->bmi}}</td>
                            <td>{{$shedule->valid_time}}</td>
                            <td> <a   href="{{route('shedul_view_memeber',$shedule->id)}}" class="btn btn-primary" >
                                view
                            </button></td>

                            @endif
                            @endforeach
                       
                    </tbody>
                </table>
                </div>
         </div>
</div>





        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>  
            $( document ).ready(function() {
                new DataTable('#shedule');
            });
            </script>
<!--


<script>
    $(document).ready(function () {
        new DataTable('#shedule');
    });

    function initializeModal(modalId, openBtnId) {
        const modal = document.getElementById(modalId);
        const openModalBtn = document.getElementById(openBtnId);
        const closeBtns = modal.querySelectorAll(".close");

        // Open modal when button is clicked
        openModalBtn.addEventListener('click', () => {
            modal.style.display = "block";
        });

        // Close modal when close button or modal background is clicked
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.style.display = "none";
            });
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }

    // Initialize each modal instance
    initializeModal("viewModal", "openModalBtnvi");
</script>

</section>
</body>


</html>
