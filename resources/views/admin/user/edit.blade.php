@extends('layouts.dashboard')

@section('pageTitle', 'Dashboard')

@section('content')

    {{-- MAIN CONTAINER --}}
    <div class="container">
        {{-- DOCTOR LEFT CONTAINER --}}
        <div class="doctor-left-container">

            {{-- DOCTOR ICONS --}}
            <div class="doctor-icons">
                <a href="{{ route('index') }}"><i class="fas fa-home"></i></a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fas fa-sign-out-alt"></i></a>
                <a href="{{ route('edit-profile') }}"><i class="fas fa-pen"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>

            {{-- DOCTOR-PIC --}}
            <div class="doctor-pic">
                <img src="{{ asset('storage/' . Auth::user()->profile_pic) }}">
            </div>

            {{-- DOCTOR-INFO --}}
            <div class="doctor-info">
                <div class="doctor-name">
                    <h2 class="dashboard-title">{{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
                </div>
            </div>

            {{-- DOCTOR-MENU --}}
            <div class="doctor-menu">
                <ul>
                    <li><a href="">Il Mio Profilo</a></li>
                    <li><a href="">Recensioni</a></li>
                    <li><a href="">Messaggi</a></li>
                    <li><a href="">Statistiche</a></li>
                    <li><a href="">Sponsorizzazioni</a></li>
                </ul>
            </div>
        </div>
        {{-- FINE DOCTOR LEFT CONTAINER --}}

        {{-- DOCTOR RIGHT CONTAINER --}}
        <div class="doctor-right-container">
            <div class="doctor-right-top-container">
                <h1> Modifica il mio profilo </h1>
            </div>

            <div class="doctor-right-bottom-container relative">
                <form action="{{ route('return-edit-profile') }}" method="post">
                    @csrf
                    @method('PUT')


                    {{-- NAME --}}
                    <div class="form-auth-item">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="auth-item-input">
                            <input id="name" value="{{ Auth::user()->name }}" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- SURNAME --}}
                    <div class="form-auth-item">
                        <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                        <div class="auth-item-input">
                            <input id="surname" value="{{ Auth::user()->surname }}" type="text"
                                class="form-control @error('surname') is-invalid @enderror" name="surname"
                                value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- ADDRESS --}}
                    <div class="form-auth-item">
                        <label for="address">{{ __('Address') }}</label>

                        <div class="auth-item-input">
                            <input id="address" value="{{ Auth::user()->address }}" type="text"
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
                        <label for="street_number">{{ __('Street number') }}</label>

                        <div class="auth-item-input">
                            <input id="street_number" value="{{ Auth::user()->street_number }}" type="number"
                                class="form-control @error('street_number') is-invalid @enderror" name="street_number"
                                value="{{ old('street_number') }}" required autocomplete="street_number" autofocus>

                            @error('street_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- CITY --}}
                    <div class="form-auth-item">
                        <label for="city">{{ __('City') }}</label>

                        <div class="auth-item-input">
                            <input id="city" value="{{ Auth::user()->city }}" type="text"
                                class="form-control @error('city') is-invalid @enderror" name="city"
                                value="{{ old('city') }}" required autocomplete="city" autofocus>

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- COUNTY --}}
                    {{-- <div class="form-auth-item">
                    <label for="county">{{ __('County') }}</label>
        
                    <div class="auth-item-input">
                        <input id="county" value="{{ Auth::user()->county }}" type="text"
                            class="form-control @error('county') is-invalid @enderror" name="county"
                            value="{{ old('county') }}" required autocomplete="county" autofocus>
        
                        @error('county')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}

                    {{-- PROFILE PIC --}}
                    <div class="form-auth-item">
                        <label for="fname">Profile picture:</label>
                        <input type="file" name="profile_pic" value="{{ 'storage/' . Auth::user()->profile_pic }}">
                    </div>

                    {{-- CV --}}
                    <div class="form-auth-item">
                        <label for="fname">Curriculum vitae:</label>
                        <input type="file" value="{{ 'storage/' . Auth::user()->cv }}" name="cv">
                    </div>

                    {{-- PHONE NUMBER --}}
                    <div class="form-auth-item">
                        <label for="phone_number">{{ __('Phone Number') }}</label>

                        <div class="auth-item-input">
                            <input id="phone_number" value="{{ Auth::user()->phone_number }}" type="text"
                                class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- EMAIL --}}
                    <div class="form-auth-item">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <div class="auth-item-input">
                            <input id="email" value="{{ Auth::user()->email }}" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div id="specialization">
                        @foreach ($specializations as $specialization)
                            <ul>
                                <li>
                                    <input name="specializations[]" type="checkbox" value="{{ $specialization->id }}"
                                        {{ Auth::user()->specializations->contains($specialization) ? 'checked=checked' : '' }}>
                                    <label>{{ $specialization->name }}</label>
                                </li>
                            </ul>

                        @endforeach

                        <div id="confirm_modification" class="form-auth-item">
                            <div class="auth-item-input">
                                <button type="submit">
                                    {{ __('Conferma modifiche') }}
                                </button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        {{-- FINE DOCTOR RIGHT CONTAINER --}}
    </div>
@endsection
