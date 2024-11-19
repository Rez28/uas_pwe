<header>
    <nav class="navbar navbar-expand-lg navbar-light position-relative">
        <div class="container">
            <!-- Logo di kiri -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo fix.png') }}" alt="Logo" width="70" height="70">
            </a>
            <!-- Tombol Toggle untuk versi mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigasi dan Form pencarian -->
            <div class="col-3">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <!-- Navigasi di kanan atas -->
                <div class="d-flex flex-row bd-highlight mb-3 top-0 end-0 p-3">
                    <ul class="navbar-nav d-inline-flex me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="landing-page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="landing-page.about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="landing-page.about">Contact</a>
                        </li>

                    </ul>
                        <button class="btn btn-outline-success" onclick="location.href='{{ route('login') }}'">Login</button>

                </div>
            </div>
        </div>
        </div>
    </nav>
</header>
