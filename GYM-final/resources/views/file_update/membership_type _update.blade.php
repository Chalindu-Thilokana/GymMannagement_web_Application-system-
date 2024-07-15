

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

<div id="" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">update membership types</h4>
                <span class="close">&times;</span>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <section class="member">
                    <form class="mform" action="{{ route('pakage_update', $membership_type->id) }}" method="POST">
                        @csrf
                        <br>
                        <br>
                        <div class="input-box1">
                            <input type="text" class="form-control" id="first-name" name="membership_type" required value="{{$membership_type->membership_type}}">
                            <label for="first-name"></label>
                        </div>
                        
                        <div class="input-box1">
                            <input type="text" class="form-reg-mem" id="last-name" name="facilities" required value="{{$membership_type->facilities}}">
                            <label for="last-name">facilities</label>
                        </div> 
                        <div class="input-box1">
                            <select class="form-control" id="trainers" name="trainers" required>
                               
                                <option value=" coman Trainer"{{ $membership_type->trainers == "coman Trainer" ? 'selected' : '' }}> coman Trainer </option>
                                <option value="presonalTrainer"{{ $membership_type->trainers == "presonalTrainer" ? 'selected' : '' }}> presonalTrainer </option>
                                <option value="profecal Trainer"{{ $membership_type->trainers == "profecal Trainer" ? 'selected' : '' }}> profecal Trainer </option>
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
                            <input type="number" class="form-reg-mem" id="bmi" name="price" min="0"   required value="{{$membership_type->price}}">
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
                            <button    class="btn-primary btn-custom" >Update</a>
                        </div>
                        
                    </form>
                </section>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <a href="{{route('attendence') }}" type="button" class="btn-danger close">Close</a>
            </div>
        </div>
    </div>
</div>
</body>
</section>

