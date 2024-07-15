<!doctype html>
<html lang="en">

<head>
    <body>
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
<section class="home" id="home">
    <div class="container p-5">
        <div class="row">
         <div class="table-back">
    
         <table class="table table-striped" id="admintrainer" style="width: 100%;">
            <caption class="table-title">Trainers payments details
                
            </caption>
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                  
                    
                    <th scope="col">Gender</th>
                    <th scope="col">Mobile Phone</th>
                    <th scope="col">Save pay</th>
                    
                    
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                   
                    <td>@mdo</td>
                    <td>@mdo</td>
                 
                   
                    <td><div class="container-flex">
                        <button id="openModalBtn" class="btn btn-primary btn-custom">Pay salery</button>
                    </div></td>
                    
                </tr>
            </tbody>
        </table>

        <div class="table-back">
    
            <table class="table table-striped" id="pay" style="width: 100%;">
               <caption class="table-title">Trainers
                   
               </caption>
               <thead class="table-dark">
                   <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Ammount</th>
                       <th scope="col">date</th>
                       
                       
                       
                       
                       <th scope="col">Delete</th>
                      
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <th scope="row">1</th>
                       <td>Mark</td>
                       <td>Otto</td>
                       <td>@mdo</td>
                       
                      
                      
                       <td><a href="#" type="button" id="" class="btn-danger">Delete</a></td>
                       
                   </tr>
               </tbody>
           </table>
       </div>
   </div>
    </div>

</div>
    </div>
</section>


</body>
</html>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        

        


        <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>

        $( document ).ready(function() {
           new DataTable('#admintrainer');
        });</script>
        <script>
        $( document ).ready(function() {
            new DataTable('#pay');
         });</script>






           
        >
        