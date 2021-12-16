{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        

        
    </x-auth-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Welcome</title>
    @include('layouts.css')

  </head>
  <body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="layout-container">
      <div class="page-container bg-blue-grey-900">
        <div class="d-flex align-items-center align-items-center-ie bg-gradient-primary">
          <div class="fw">
            <div class="container container-xs">
              <form class="cardbox cardbox-flat text-white form-validate text-color" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="cardbox-heading">
                  <div class="cardbox-title text-center">Login</div>
                </div>
                <div class="cardbox-body">
                  <div class="px-5">
                    <div class="form-group">
                      <input id="email" class="form-control form-control-inverse" type="email" name="email" required placeholder="Email address">
                    </div>
                    <div class="form-group">
                      <input id="password" class="form-control form-control-inverse" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    </div>
                    <div class="form-group mt-4">
                      <div class="custom-control custom-checkbox mb-0">
                        <input class="custom-control-input" id="remember_me" type="checkbox" name="remember">
                        <label class="custom-control-label" for="remember_me">{{ __('Remember me')}}</label>
                      </div>
                    </div>
                    <div class="text-center my-4">
                      <button class="btn btn-lg btn-gradient btn-oval btn-info btn-block" type="submit">Log in</button>
                    </div>
                  </div>
                  <div class="text-center">
                    @if (Route::has('password.request'))
                        <small><a class="text-inherit" href="recover.html">Forgot password?</a></small>
                    @endif
                </div>
                </div>
                <div class="cardbox-footer text-center text-sm"><span class="mr-2">No account yet?</span><a class="text-inherit" href="{{ route('register') }}"><strong>Register Now</strong></a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.scripts')  
  </body>
</html>