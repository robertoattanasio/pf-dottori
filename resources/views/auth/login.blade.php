@extends('layouts.card')

@section('content')

        {{-- EMAIL --}}
        <div class="card-header">{{ __('Login') }}</div>
        <form class="form-auth" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-auth-item">
                <label for="email" class="">{{ __('E-Mail') }}</label>

                <div class="auth-item-input">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- PASSWORD --}}
            <div class="form-auth-item">
                <label for="password" class="">{{ __('Password') }}</label>

                <div class="auth-item-input">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-auth-item">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="" for="remember">
                    {{ __('Ricordami') }}
                </label>
            </div>

            <div class="form-auth-item">
                <div class="button-auth">
                    <button type="submit" class="">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="forgot-your-password" href="{{ route('password.request') }}">
                        {{ __('Hai dimenticato la password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
@endsection
