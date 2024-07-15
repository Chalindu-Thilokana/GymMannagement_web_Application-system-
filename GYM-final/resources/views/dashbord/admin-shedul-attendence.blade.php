<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shedul create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   

    
    <link rel="stylesheet" href="{{ asset('dashbordmy/table.css') }}">
    <link rel=  "stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
        @vite('resources/css/app.css')

        <link rel="stylesheet" href="{{ asset('dashbordmy/popup.css') }}">
        <link rel="stylesheet" href="{{ asset('dashbordmy/bmi.css') }}">
       

    <style>
         
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
    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                @include('component.BMI')
            </div>
            <div class="col-md-6" style="padding-top: 2.5rem;">

            @include('dashbord.attendence-reort')
            </div>
        </div>
    </div>


    <div class="container p-5">
        <div class="row">
            <!-- Left Column: Chart -->
           

            <div class="table-back">
     
                 <!-- table podi kale meken -->
        
                <table class="table table-striped" id="attendence" style="width: 100%">
                    <caption class="table-title">Member attendence</caption>
                    
               
                <thead class="table-dark">
                   
                    <tr>
                        
                        <th scope="col">id</th>
                        <th scope="col"> name </th>
                        <th scope="col">date</th>
                        <th scope="col"> Schedule Select Day:</th>
                        <th scope="col">distroy attendence</th>
                        
                        
                    </tr>

                </thead>
                <tbody>

                    @forEach( $attendences as $attendence)
                    <tr>
                        
                        <th scope="row">{{ $attendence->id }}</th>
                        <td >{{  $attendence->name }}</td>
                        
                        <td>{{ $attendence->created_at }}</td>
                        <td>{{ $attendence->day }}</td>
                       {{-- <!--<td> {{ $attendence->member->full_name }}</td>--> --}}
                       
                      
                        
                        
                        <td> <form action="{{route('attendence_delete',$attendence->id)}}" method="post" >
                            @csrf
                              @method('delete')

                        <button type="submit" id="" class="btn-danger">delete</button>

                        </form></td>
                            
                        
                    </tr>
                    @endforeach
                        
                   
                </tbody>

                
              </table>
            </div>
              
             
            </div>
           
            </div>
            </div>
            
        


          <div class="col-6">
          </div>
        </div>
    </div>
  
<!-- popup  -->
<!-- create  -->
    <!-- Modal Structure -->
    <div id="registerModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create membership types</h4>
                    <span class="close">&times;</span>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <section class="member">
                        <form class="mform" action="{{route('member_type')}}" method="POST">
                            @csrf
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="first-name" name="membership_type" required>
                                <label for="first-name">membership &nbsp; Type</label>
                            </div>
                            
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="last-name" name="facilities" required>
                                <label for="last-name">facilities</label>
                            </div> 
                            <div class="input-box1">
                                <select class="form-reg-mem" id="trainers" name="trainers" required>
                                    <option value="" disabled selected hidden>Select Trainer</option>
                                    <option value="coman Trainer "> coman Trainer </option>
                                    <option value="presonalTrainer"> presonalTrainer </option>
                                    <option value="profecal Trainer"> profecal Trainer </option>
                                    <!-- Add more options as needed -->
                                </select>
                                <label for="trainers">Trainers</label>
                            </div>
                            
                            <!--
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="helth" name="helth" required>
                                <label for="helth">helth condition</label>
                            </div>
                            <div class="input-box1">
                                <input type="date" class="form-reg-mem" id="date" name="date" required>
                                <label for="date">Valid &nbsp; Date</label>
                            </div> -->
                            <div class="input-box1">
                                <input type="number" class="form-reg-mem" id="bmi" name="price" min="0" max=""  required>
                                <label for="bmi">Price</label>
                            </div>
                            <!--
                            <div class="input-box1">
                                <label for="activity">Enter activity:</label><br><br>
                                <textarea id="activity" name="activity" rows="8" cols="50">'membership_type',
        'price',
                                    Default text inside the textarea

                                </textarea>
                            </div> -->
                            <div class="input-box1">
                                <input type="checkbox" class="form-reg-mem" id="Check1" required>
                                <label for="Check1">Check me out</label>
                            </div>
                            <div class="input-box1">
                                <button class="btn-custom">Create</button>
                            </div>
                        </form>
                    </section>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn-danger close">Close</button>
                </div>
            </div>
        </div>
    </div>


    
    <!-- membership type table -->
    <div class="table-back">
     
        <div class="container p-5"> <!-- table podi kale meken -->

        <table class="table table-striped" id="member" style="width: 100%">
            <caption class="table-title">Membership_types      
                
                <div class="container-flex">
                <button id="openModalBtn" class="btn btn-primary btn-custom">Add Membership_types</button>
            </div>
        </caption>
            
       
        <thead class="table-dark">
            
            <tr>
                
                <th scope="col">#</th>
                <th scope="col"> name </th>
                <th scope="col">Price</th>
              <!--  <th scope="col">weight</th>
                <th scope="col">height</th>
                <th scope="col">bmi</th>
                <th scope="col">Gender</th>
                <th scope="col">mobile phone</th>
                <th scope="col">create shedule</th> -->
                
                <th scope="col"> facilities</th>
                <th scope="col"> trainers personal or coman</th>
                
                <th scope="col">update-activity</th>
                <th scope="col">delete</th>
                
            </tr>
        </thead>
        <tbody>
            @forEach( $membership_types as $membership_type)
            <tr>
               
                <th scope="row">{{ $membership_type->id }}</th>
                <td>{{ $membership_type->price }}</td>
                <td>{{ $membership_type->membership_type }}</td>
                <td>{{ $membership_type->facilities }}</td>
                <td>{{ $membership_type->trainers}}</td>
                      
                
                

                <td>
                    <a   href="{{route('pakage_edit',$membership_type->id)}}" class="btn-view ">
                    update
                </a>
            </td>

                <td> <form action="{{route('pakage_delete',$membership_type->id)}}" method="post" >
                    @csrf
                      @method('delete')

                <button type="submit" id="" class="btn-danger">delete</button>

                </form>
                    
                
         
               
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    </div>

   

</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
     <script>  
     $( document ).ready(function() {
        new DataTable('#member');
     });</script>

      <script>  
     $( document ).ready(function() {
        new DataTable('#shedule');
     });</script>
      <script>  
        $( document ).ready(function() {
           new DataTable('#attendence');
        });</script>






     






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('label').forEach(label => {
            label.innerHTML = label.innerText.split('').map((letter, i) =>
                `<span style="transition-delay:${i * 50}ms">${letter}</span>`
            ).join('');
        });
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
  
  // Initialize each modal instance (replace with your actual modal IDs and button IDs)
  initializeModal("registerModal", "openModalBtn");
  //initializeModal("membershiptypeModal", "openModalBtnmm");
  //initializeModal("updateModal", "openModalBtnup"); // Assuming this button ID exists
  //initializeModal("viewModal", "openModalBtnvi"); // Assuming this button ID exists
  
    
        </script>




<script src="{{ asset('indexmy_js/BMI.js') }}"></script>





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    
</body>


</html>


