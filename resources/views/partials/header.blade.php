<header>

        {{-- LOGO CONTAINER --}}
        <div class="logo">

        </div>

        {{-- NAV CONTAINER --}}
        <nav class="nav-desktop">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('doctors') }}">Dottori</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('faq') }}">Domande Frequenti</a></li>
                <li><a href="{{ route('terms') }}">Termini e Condizioni</a></li>



                @if (Route::has('login'))
                        @auth
                            <li><a href="{{ route('dashboard-about') }}">Dashboard</a></li>

                            
                                {{-- LOG OUT --}}
                                {{-- <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form> --}}
                                {{-- FINE LOG OUT --}}
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Registrati</a></li>
                            @endif
                        @endauth
                    
                @endif
            </ul>
        </nav>

</header>