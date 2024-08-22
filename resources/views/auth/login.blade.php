<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Keju</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom styles -->
    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f7f9fc;
      }

      .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: auto;
        background: #fff;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
      }

      .form-signin input[type="email"],
      .form-signin input[type="password"],
      .form-signin input[type="text"] {
        margin-bottom: 10px;
        border-radius: 4px;
        padding-right: 40px; /* Space for the eye icon */
        box-sizing: border-box; /* Ensure padding is included in the width */
        width: 100%;
      }

      .form-signin button {
        border-radius: 4px;
      }

      .form-signin img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .text-muted {
        color: #6c757d !important;
      }

      .password-wrapper {
        position: relative;
      }

      .field-icon {
        position: absolute  ;
        top: 60%;
        right: 10px;
        cursor: pointer;
        color: #999;
      }

      .invalid-feedback {
        display: block;
      }
    </style>
  </head>
  <body>
    <main class="form-signin">
      <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
        <img class="mb-4" src="{{ asset('img/KejuLogo.jpeg') }}" alt="Keju Logo" width="150" height="150">

        <h1 class="h3 mb-3 fw-normal text-left">Login ke Akun Anda</h1>

        <div class="form-floating">
          <label for="email">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
          
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating password-wrapper">
          <label for="password">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
          <span class="fa fa-fw fa-eye field-icon toggle-password"></span>     

          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="checkbox mb-3 custom-checkbox">
          <label>
            <input type="checkbox" name="remember" value="remember-me"> Remember me
          </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        <div class="register-container mt-3">
          <span class="register-text">Belum punya akun?</span>
          <a href="{{ route('auth.register') }}" class="register-link">Daftar Sekarang</a>
        </div>

        <p class="mt-3 text-muted">&copy; UK Mustarika Jaya</p>
      </form>
    </main>

    <!-- Bootstrap core JS -->
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Toggle Password Visibility -->
    <script>
      document.querySelector('.toggle-password').addEventListener('click', function (e) {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Toggle the eye icon
        this.classList.toggle('fa-eye-slash');
      });
    </script>
  </body>
</html>
