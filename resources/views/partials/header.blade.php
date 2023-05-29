<header>
    <div class="container pt-3 d-flex justify-content-between">
        <div id="img_container">
            <a href="{{ route('comics.index') }}"><img src="{{ asset('img/dc-logo.png') }}" alt="dc_logo"></a>
        </div>
        <div id="navbar_container">
            <nav class="navbar-nav">
                <ul class="d-flex list-unstyled pt-5">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.characters' ? 'active' : '' }}"
                            href="{{ route('pages.characters') }}">
                            characters
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">
                            comics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.movies' ? 'active' : '' }}"
                            href="{{ route('pages.movies') }}">
                            movies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.tv' ? 'active' : '' }}"
                            href="{{ route('pages.tv') }}">
                            tv
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.games' ? 'active' : '' }}"
                            href="{{ route('pages.games') }}">
                            games
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.collectibles' ? 'active' : '' }}"
                            href="{{ route('pages.collectibles') }}">
                            collectibles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.videos' ? 'active' : '' }}"
                            href="{{ route('pages.videos') }}">
                            videos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.fans' ? 'active' : '' }}"
                            href="{{ route('pages.fans') }}">
                            fans
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.news' ? 'active' : '' }}"
                            href="{{ route('pages.news') }}">
                            news
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-decoration-none text-uppercase fw-bold small text-dark
                        {{ Route::currentRouteName() == 'pages.shop' ? 'active' : '' }}"
                            href="{{ route('pages.shop') }}">
                            shop
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
