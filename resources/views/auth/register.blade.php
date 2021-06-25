@extends('layouts.card')

@section('content')

    {{-- ICONE HOME E BACK --}}
    <div class="doctor-icons">
        <a href="{{ route('index') }}"><i class="fas fa-home"></i></a>
    </div>

    <?php include(app_path().'/Includes/counties.php'); 
        use App\specialization;
        $specializations = Specialization::all()->toArray();

        compact('specializations');
    ?>

    <div class="card-header">{{ __('Registrati') }}</div>

    <form class="form-auth" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
        @csrf

        {{-- NAME --}}
        <div class="form-auth-item">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

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

        {{-- SURNAME --}}
        <div class="form-auth-item">
            <label for="surname"
                class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>

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

        {{-- COUNTY --}}
        <div class="form-auth-item">
            <label for="county">{{ __('Provincia') }}</label>

            <div class="auth-item-input">

                <select name="county">
                    @foreach ($counties_name as $county_name)
                        <option>{{$county_name}}</option>
                    @endforeach
                </select>

                @error('county')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        {{-- CITY --}}
        <div class="form-auth-item">
            <label for="city">{{ __('Città') }}</label>

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

        {{-- ADDRESS --}}
        <div class="form-auth-item">
            <label for="address">{{ __('Indirizzo') }}</label>

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

        {{-- STREET NUMBER --}}
        <div class="form-auth-item">
            <label for="street_number">{{ __('Numero Civico') }}</label>

            <div class="auth-item-input">
                <input id="street_number" type="number" min="1" max="999"
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

        {{-- PROFILE PIC --}}
        <div class="form-auth-item">
            <label for="fname">Foto del profilo:</label>
            <input type="file" name="profile_pic">
        </div>

        {{-- CV --}}
        <div class="form-auth-item">
            <label for="fname">Curriculum vitae:</label>
            <input type="file" name="cv">
        </div>

        {{-- PHONE NUMBER --}}
        <div class="form-auth-item">
            <label for="phone_number">{{ __('Numero di telefono') }}</label>

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

        {{-- EMAIL --}}
        <div class="form-auth-item">
            <label for="email">{{ __('E-Mail') }}</label>

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

        {{-- PASSWORD --}}
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

        {{-- CONFIRM PASSWORD --}}
        <div class="form-auth-item">
            <label for="password-confirm">{{ __('Conferma Password') }}</label>

            <div class="auth-item-input">
                <input id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        {{-- SUBMIT --}}
        <div class="form-auth-item">
            <div class="auth-item-input">
                <button type="submit" class="big-button pink-button">
                    {{ __('Registrati') }}
                </button>
            </div>
        </div>
    </form>
@endsection
