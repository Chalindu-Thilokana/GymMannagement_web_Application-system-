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
        @include('component.BMI')
        <!-- popup  -->



        <div class="container p-5"> <!-- table podi kale meken -->
            <div class="table-back">


                <table class="table table-striped" id="shedule" style="width: 100%">
                    <caption class="table-title">shedule</caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">member</th>
                            <th scope="col">helth condition</th>
                            <th scope="col">bmi</th>
                            <th scope="col">valid_time</th>
                            <th scope="col">view</th>
                            <th scope="col">delete</th>
                          <!--  <th scope="col">update-activity</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shedules as $shedule)
                        @if (Auth::user()->trainer_id == $shedule->trainer_id )
                            
                        <tr>
                                <th scope="row">{{ $shedule->id}}</th>
                                <td>{{ $shedule->member->full_name}}</td>
                                <td>{{ $shedule->helth_condition}}</td>
                                <td>{{ $shedule->bmi}}</td>
                                <td>{{ $shedule->valid_time}}</td>
                               
                                
                                <td> <a href="{{route('shedul_view', $shedule->id)}}" id="openModalBtnvi" class="btn btn-primary" >
                                        view
                                </a>
                                </td>



                                
                                <td> <form action="{{route('shedule_delete',$shedule->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                
                                    <button class="btn btn-warning"> delete</button></td>

                              <!--  <td><button id="openModalBtnup" class="">
                                        update
                                    </button></td> -->
                                
                        </tr>

                        @endif
                        @endforeach
                        




                    </tbody>
                </table>
            </div>





        </div>

        </div>
        </div>
        <div class="table-back">

            <div class="container p-5"> <!-- table podi kale meken -->

                <table class="table table-striped" id="member" style="width: 100%">
                    <caption class="table-title">members</caption>


                    <thead class="table-dark">

                        <tr>
                           
                            <th scope="col">#</th>
                            <th scope="col"> name </th>
                            <th scope="col">age</th>
                            <th scope="col">weight</th>
                            <th scope="col">height</th>
                            <th scope="col">bmi</th>
                            <th scope="col">Gender</th>
                            <th scope="col">mobile phone</th>
                            <th scope="col">create shedule</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            @if (Auth::user()->trainer_id == $member->trainer_id)
                                <tr>
                                    <th scope="row">{{ $member->id }}</th>
                                    <td>{{ $member->full_name }}</td>
                                    <td>{{ $member->age }}</td>
                                    <td>{{ $member->weight }}</td>
                                    <td>{{ $member->height }}</td>
                                    <td>{{ $member->BMI }}</td>
                                    <td>{{ $member->gender }}</td>
                                    
                                    <td>{{ $member->mobile_phone_number }}</td>
                                    
                                    <td> <a href="{{ route('shedule_edit', $member->id) }}" id="openModalBtn"
                                            class="btn btn-primary">
                                            create shedule
                                            </button>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        new DataTable('#member');
    });
</script>

<script>
    $(document).ready(function() {
        new DataTable('#shedule');
    });
</script>






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
