<header>

        {{-- LOGO CONTAINER --}}
        <div class="logo">

        </div>

        {{-- NAV CONTAINER --}}
        <nav class="nav-desktop">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                {{-- <li><a href="{{ route('doctors') }}">Dottori</a></li> --}}
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('faq') }}">Domande Frequenti</a></li>
                <li><a href="{{ route('terms') }}">Termini e Condizioni</a></li>



                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ route('dashboard-about') }}">Dashboard</a></li>

                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Registrati</a></li>
                            @endif
                        @endauth    
                @endif
            </ul>
        </nav>

</header>