<header>
    
    <div class="header-wrapper">
        {{-- LOGO CONTAINER --}}
        <div class="logo">
            <span class="true">True</span><span class="doctors">Doctors</span>
        </div>

        {{-- NAV CONTAINER DESKTOP --}}
        <nav class="nav-desktop">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('faq') }}">Domande Frequenti</a></li>
                <li><a href="{{ route('psychology') }}">Psicologia Online</a></li>

                {{-- ADMINISTRATOR SECTION --}}
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

        {{-- NAV MOBILE HAMBURGER --}}
        <nav class="nav-mobile">
            <div class="hamburger">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </div>

            {{-- NAV MOBILE WINDOW --}}
            <div class="menu-mobile">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                    <li><a href="{{ route('faq') }}">Domande Frequenti</a></li>
                    <li><a href="{{ route('psychology') }}">Psicologia Online</a></li>
    
                    {{-- ADMINISTRATOR SECTION --}}
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
            </div>
        </nav>
        
    </div>

</header>
