<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
          <!-- Left Blank Side -->
          <div class="col-lg-6"></div>
      
          <!-- Right Side Form -->
          <div class="col-lg-6 d-flex align-items-center justify-content-center right-side">
            <div class="form-2-wrapper">
              <div class="logo text-center mb-4">
                <img src="{{ asset('/img/logo/logo-alone.png') }}" alt="">
              </div>

              <form action="#">
                <div class="mb-3 form-box">
                  <label for="email">CPF:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="000.000.000-00" required>
                </div>
                
                <div class="mb-3">
                    <label for="password">Senha:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Mínimo de 8 caracteres" required>
                </div>

                {{-- <div class="mb-3">
                  <div>
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                </div> --}}

                <button type="submit" class="login-btn w-50 mt-4 mb-3">Entrar</button>
              </form>
      
              <!-- Register Link -->
              <div class="text-start register-link mt-4">
                <a href="#" class="">Esqueceu a senha?</a>
                <p class="mt-1">Primeira vez usando o Agendaí? <a href="#" class="">Cadastre-se</a></p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
</body>
</html>



{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
