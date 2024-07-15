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
        /* Add additional responsive styles here if necessary */
    </style>

</head>
@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">
<body>
    <!-- Modal Structure -->
    <div id="" class="">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Schedule</h4>
                    <span class="close">&times;</span>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <section class="member">
                        <form class="mform" action="">
                            @csrf
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="first-name" name="first-name" required>
                                <label for="first-name">First &nbsp; Name</label>
                            </div>
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="helth" name="helth" required>
                                <label for="helth">helth condition</label>
                            </div>
                            <div class="input-box1">
                                <input type="date" class="form-reg-mem" id="date" name="date" required>
                                <label for="date">Valid &nbsp; Date</label>
                            </div>
                            <div class="input-box1">
                                <input type="number" class="form-reg-mem" id="bmi" name="bmi" min="0" max="200" step="0.1" required>
                                <label for="bmi">BMI</label>
                            </div>
                            <div class="input-box1">
                                <label for="activity">Enter activity:</label><br><br>
                                <textarea id="activity" name="activity" rows="8" cols="50">
                                    Default text inside the textarea
                                </textarea>
                            </div>
                            <div class="input-box1">
                                <input type="checkbox" class="form-reg-mem" id="Check1" required>
                                <label for="Check1">Check me out</label>
                            </div>
                            <div class="input-box1">
                                
                                <a href="#" class="btn-custom">Update</a>

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