

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
<div id="member_approw_Modal" class="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">approwel trainer</h4>
                <span class="close">&times;</span>
            </div>
            <br>
            <br>
            <div class="modal-body">





<form action="{{route('approw_trainer', $trainer->id)}}" method="post">
    @csrf
    <div class="input-box1">
        <label for="first-name">full Name</label>
        <input type="text" name="name" value="{{$trainer->full_name}}" >
        
    </div>

    <div class="input-box1">
        <label for="email">Email</label>

    <input type="email" name="email" value="{{$trainer->email}}" >

    </div>
    <input type="hidden" name="new_userid" value="{{$trainer->id}}" >

    <input type="hidden" name="password" value="{{$trainer->password}}" >


 <button type="submit" id="" class="btn-approw">Approve</button>
</form>
            </div>
        </div>
    </div>
</div>
</body>
</section>
</html>
