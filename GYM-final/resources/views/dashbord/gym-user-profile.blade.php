
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
        @vite('resources/css/app.css')
</head>

<body>
@include('dashbord.dashbord-slidebar')
<section class="home"  id="home">

    <div class="container p-5" style="background-color: rgb(231, 228, 228)">
    @livewire('profile.update-password-form')
    @livewire('profile.update-profile-information-form')
    @livewire('profile.delete-user-form')
  </div>
</section>
</body>
</html>