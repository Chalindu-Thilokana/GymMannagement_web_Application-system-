<!-- popup  -->

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
        .big-input {
    width: 300px; /* Adjust the width as needed */
    height: 200px; /* Adjust the height as needed */
    /* Additional styling to make it look like a text box */
    border: 1px solid #ccc;
    padding: 5px;
    font-size: 14px;
    resize: vertical; /* Allow vertical resizing */
}
        /* Add additional responsive styles here if necessary */
    </style>
</head>
@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">
<body>
    <!-- Modal Structure -->
    <div id="viewModal" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">view Schedule</h4>
                    <span class="close">&times;</span>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <section class="membe">
                        <form class="mfor" action="" method="post">
                            @csrf
                          
                            
                            <div class="input-box1">
                                <label for="activity"> activity:</label><br><br>
                                <textarea id="activity" name="shedule" class="big-input" >{{ $shedule->description_activity}}
                                </textarea>
                            
                            </div>
                           
                        </form>
                    </section>
                </div>

                  <!--model script -->
               <!-- Modal Footer -->
               <div class="modal-footer">
                <button type="button" class="btn-danger close">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
</section>
</html>