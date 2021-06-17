@extends('layouts.app')

@section('content')
    <div class="card-header">{{ __('Register') }}</div>

    <form class="form-auth" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-auth-item">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="auth-item-input">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="surname"
                class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

            <div class="auth-item-input">
                <input id="surname" type="text"
                    class="form-control @error('surname') is-invalid @enderror" name="surname"
                    value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="address">{{ __('Address') }}</label>

            <div class="auth-item-input">
                <input id="address" type="text"
                    class="form-control @error('address') is-invalid @enderror" name="address"
                    value="{{ old('address') }}" required autocomplete="address" autofocus>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="street_number">{{ __('Street number') }}</label>

            <div class="auth-item-input">
                <input id="street_number" type="number"
                    class="form-control @error('street_number') is-invalid @enderror"
                    name="street_number" value="{{ old('street_number') }}" required
                    autocomplete="street_number" autofocus>

                @error('street_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="city">{{ __('City') }}</label>

            <div class="auth-item-input">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                    name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="county">{{ __('County') }}</label>

            <div class="auth-item-input">
                <input id="county" type="text"
                    class="form-control @error('county') is-invalid @enderror" name="county"
                    value="{{ old('county') }}" required autocomplete="county" autofocus>

                @error('county')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="fname">Profile picture:</label>
            <input type="file" name="profile_pic">
        </div>

        <div class="form-auth-item">
            <label for="fname">Curriculum vitae:</label>
            <input type="file" name="cv">
        </div>

        <div class="form-auth-item">
            <label for="phone_number">{{ __('Phone Number') }}</label>

            <div class="auth-item-input">
                <input id="phone_number" type="tel"
                    class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number" value="{{ old('phone_number') }}" required
                    autocomplete="phone_number" autofocus>

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="email">{{ __('E-Mail Address') }}</label>

            <div class="auth-item-input">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="password">{{ __('Password') }}</label>

            <div class="auth-item-input">
                <input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-auth-item">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>

            <div class="auth-item-input">
                <input id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-auth-item">
            <div class="auth-item-input">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
@endsection
