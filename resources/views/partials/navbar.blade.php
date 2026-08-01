<header class="navbar-area">
    <div class="container">

        <nav class="navbar navbar-expand-lg p-0">

            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">

                <img src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="Logo Desa Tangkisan"
                    class="logo">

                <div class="brand-text">
                    <span>Website Resmi</span>
                    <strong>Desa Tangkisan</strong>
                </div>

            </a>

            <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('profil') }}"
                            class="nav-link {{ request()->routeIs('profil') ? 'active' : '' }}">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('demografi') }}"
                            class="nav-link {{ request()->routeIs('demografi') ? 'active' : '' }}">
                            Demografi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('layanan') }}"
                            class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}">
                            Layanan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('wisata') }}"
                            class="nav-link {{ request()->routeIs('wisata') ? 'active' : '' }}">
                            Wisata
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('umkm') }}"
                            class="nav-link {{ request()->routeIs('umkm*') ? 'active' : '' }}">
                            UMKM
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('berita') }}"
                            class="nav-link {{ request()->routeIs('berita*') ? 'active' : '' }}">
                            Berita
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('galeri') }}"
                            class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('kontak') }}"
                            class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}">
                            Kontak
                        </a>
                    </li>

                </ul>

                <a href="#" class="btn-report">
                    <i class="bi bi-megaphone-fill me-2"></i>
                    Lapor
                </a>

            </div>

        </nav>

    </div>
</header>