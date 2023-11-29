

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sevex Apparel</title>
    <link rel="stylesheet" href="{{ ('auth/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ ('auth/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ ('auth/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ ('home/assets/images/favicon.png') }}" type="image/x-icon">
  </head>
  <body>
    <div class="wrapper">
      <div class="logo">
        <img
          src="{{ ('auth/assets/img/favicon copy.png') }}"
          alt=""
        />
      </div>
      <div class="text-center mt-4 name"><h4>Log In</h4></div>
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-field d-flex align-items-center">
          <span class="far fa-solid fa-user fa-bounce"></span>
          <input
            id="email"
            type="email"
            name="email"
            :value="old('email')"
            required
            autofocus
            autocomplete="username"
            placeholder="Username/Email"
          />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="fas fa-solid fa-key fa-bounce"></span>
          <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            placeholder="Password"
          />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <button class="btn mt-3">{{ __('Log in') }}</button>
      </form>
      <div class="text-center fs-6">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a> 
        @endif
        <span>or</span> <a href="{{ route('register') }}">{{ __('Register') }}</a>
      </div>
    </div>
  </body>

  <script src="{{ ('auth/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ ('auth/assets/js/jquery.min.js') }}"></script>
</html>
