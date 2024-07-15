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
        /* Add additional responsive styles here if necessary */
    </style>
</head>

<body>
    @include('dashbord.dashbord-slidebar')
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
    <section class="home" id="home">
        <div class="container p-5">
            <div class="row">
                <!-- Left Column: Chart -->
                <div class="col-md-6">

                    @include('dashbord.admin-memchart')
                </div>
                <div class="col-md-6">



                    @include('dashbord.massage-table')
                </div>
            </div>
        </div>

        <div class="table-back">
            <div class="container p-4">
                <table class="table table-striped" id="adminmember" style="width: 100%;font-size: 15px">
                    <caption class="table-title">Members
                        <div class="container-flex">
                            <button id="openModalBtn" class="btn btn-primary btn-custom">Add Members</button>
                        </div>
                    </caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Membership</th>
                            <th scope="col">Mobile Phone</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                        @foreach ($members as $member)
                        {{-- @if (Auth:user()->new_userid === $member->trainer_id)
                       
                        @endif --}}
                            <tr>
                                <th scope="row">{{ $member->id }}</th>
                                <td>{{ $member->full_name }}</td>
                                <td>{{ $member->age }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->mobile_phone_number }}</td>
                                <td>



                                    <a href="{{ route('member_edit', $member->id) }}"
                                        class="btn btn-warning btn-view">Approve</a>
                                </td>
                               <td> <form action="{{route('member_delete',$member->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                
                                    <button class="btn btn-danger"> delete</button>
                                   
                                 
                                  
                              </form></td>
                                <td><a href="{{route('updatecompact', $member->id)}}" type="button" id="openMemberapprowModalBtn"
                                        class="btn-approw">Update</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-back">
            <div class="container p-4">
                <table class="table table-striped" id="admintrainer" style="width: 100%;f">
                    <caption class="table-title">Trainers
                        <div class="container-flex">
                            <button id="openModalBtnup" class="btn btn-primary btn-custom">Add Trainers</button>
                        </div>
                    </caption>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">traning careers</th>             


                            {{--         'full_name',
        'last_name',
        'age',
        'email',
        'gender',
        'address',
        'traning_careers',
        'work_experience',
        'mobile_phone_number',
        'land_phone_number',
        'password',
        'user_id',--}}

                            <th scope="col">experence</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Mobile Phone</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Approval</th>
                        </tr>                                        
                    </thead>
                    <tbody>
                        @foreach ($trainers as $trainer)

                        <tr>
                            <th scope="row">1</th>
                            <td>{{$trainer->full_name}}</td>
                            <td>{{$trainer->age}}</td>
                            <td>{{$trainer->email}}</td>
                            <td>{{$trainer->traning_careers}}</td>
                            <td>{{$trainer->work_experience}}</td>
                            <td>{{$trainer->gender}}</td>
                            <td>{{$trainer->mobile_phone_number}}</td>
                            
                              
                                        <td> <form action="{{route('trainer_delete',$trainer->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                        
                                            <button class="btn btn-danger"> delete</button></td>
                            <td>
                            
                                 <a href="{{route('trainer_appro', $trainer->id)}}" type="button" id="" class="btn-view">Approve</a></td>


                                   
                                <td><a href="{{route('trainer_edit',  $trainer->id)}}" type="button" id="openMemberapprowModalBtn"
                                    class="btn-approw">Update</a></td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @include('dashbord.trainer-member-reg-popup')


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                new DataTable('#adminmember');
                new DataTable('#admintrainer');
            });
        </script>





    </section>
</body>

</html>
