

   
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      
      <link rel="stylesheet" href="{{asset('loginmy/login.css')}}">
    </head>
    <body>
      {{-- @include('dashbord.dashbord-slidebar') --}}
      <div class="wrapper">
        <div class="form-wrapper sign-in">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <div class="input-group">
              <input type="text" name="email" required>
              <label for="">Email</label>
            </div>
            <div class="input-group">
              <input type="password" name="password" required>
              <label for="">Password</label>
            </div>
            <div class="remember">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit">Login</button>
            <div class="signUp-link">
              <p> <a href="{{ route('password.request') }}" class="signUpBtn-link">Forget password</a></p>
            </div>
          </form>
        </div>
       
      </div>
      <script src="script.js"></script>
    </body>
    </html>
  </body>