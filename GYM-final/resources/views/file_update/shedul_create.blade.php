<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('dashbordmy/table.css') }}">
    <link rel="stylesheet" href="{{ asset('dashbordmy/popup.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <style>
        /* Define the style for the big input */
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
<section class="home" id="home">



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
        <!-- Modal Structure -->
        <div id="registerModal" class="">
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
                            <form class="mform" action="{{ route('shedule_store') }}" method="POST">
                                @csrf
                                <div class="input-box1">
                                    <input type="text" value="{{ $member->id }}" name="member_id" hidden>
                                    <input type="text" value="{{ Auth::user()->trainer_id }}" name="trainer_id"
                                        hidden>
                                   
                                </div>
                                <div class="input-box1">
                                    <input type="text" class="form-reg-mem" id="helth" name="helth_condition"
                                        required>
                                    <label for="helth">helth condition</label>
                                </div>
                                <div class="input-box1">
                                    <input type="date" class="form-reg-mem" id="date" name="valid_time"
                                        required>
                                    <label for="date">Valid &nbsp; Date</label>
                                </div>
                                <div class="input-box1">
                                    <input type="number" class="form-reg-mem" value="{{ $member->BMI }}" name="bmi"
                                        min="0" max="200" step="0.1" required>
                                    <label for="bmi">BMI</label>
                                </div>
                               
                                <div class="input-box1">
                                    <label for="activity">activity:</label><br><br>
                                    <textarea id="activity" name="description_activity" class="big-input"> </textarea>
                                
                                </div>
                                <div class="input-box1">
                                    <input type="checkbox" class="form-reg-mem" id="Check1" required>
                                    <label for="Check1">Check me out</label>
                                </div>
                                <div class="input-box1">
                                    <button  href="#" class="btn-custom">Create</button>
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
    </body>
</section>

</html>
