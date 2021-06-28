<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- GOOGLE FONTS KARLA --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- STYLES CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- TITLE --}}
    <title>@yield('pageTitle')</title>
</head>

<body class="">

    <div id="loader">

    </div>

    <main class="dashboard">
        <div class="container">
            {{-- DOCTOR LEFT CONTAINER --}}
            <div class="doctor-left-container">
                {{-- DOCTOR-PIC --}}
                <div class="doctor-pic">
                    @if (Auth::user()->profile_pic)
                        <img src="{{ asset('storage/'. Auth::user()->profile_pic) }}">
                    @else 
                        <img src="..\..\img\medico_default.png" alt="">
                    @endif
                </div>

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



                <div class="doctor-menu">
                    <ul>
                        <li><a href="{{ route('dashboard-about') }}"><i class="fas fa-info-circle"></i><p> Il Mio Profilo</p> </a></li>
                        <li><a href="{{ route('reviews') }}"><i class="fas fa-registered"></i><p> Recensioni</p></a></li>
                        <li><a href="{{ route('messages') }}"><i class="fas fa-envelope"></i><p> Messaggi</p></a></li>
                        <li><a href="{{ route('statistics') }}"><i class="fas fa-percent"></i><p> Statistiche</p></a></li>
                        <li><a href="{{ route('boost-profile') }}"><i class="fas fa-bolt"></i><p> Sponsorizzazioni</p></a></li>
                    </ul>
                </div>
            </div>
            {{-- FINE DOCTOR LEFT CONTAINER --}}

            @yield('content')

        </div>
    </main>

    <script>

        var body = document.getElementById('mainBody');
        var loader = document.getElementById('loader');

        window.addEventListener('load', function(){
            loader.style.opacity = 0;

            setTimeout(function(){ 
            body.style.overflow = 'auto';
                }, 100);
        })

    </script>

</body>

</html>
