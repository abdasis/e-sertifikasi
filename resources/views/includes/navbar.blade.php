<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index.html">
            <img src="{{ asset('frontend/images/1492097807-logo.png') }}" alt="" class="logo-light" height="40" />
            <img src="{{ asset('frontend/images/1492097807-logo.png') }}" alt="" class="logo-dark" height="40" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service') }}" class="nav-link">Service</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Jenis Sertifikasi
                      <span><i class="mdi mdi-menu-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                      @foreach (App\Models\Menu::all() as $iso)
                      <a class="dropdown-item active" href="{{ route('jenis-sertifikasi', $iso->link) }}">{{ $iso->nama }}</a>
                      @endforeach
                    </div>
                  </li>
                <li class="nav-item">
                    <a href="{{ route('training') }}" class="nav-link">Trainig</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('validasi') }}" class="nav-link">Validasi Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us') }}" class="nav-link">Contact</a>
                </li>
            </ul>
            <a href="{{ route('peserta-iso.pendaftaran') }}">
                <button class="btn btn-light navbar-btn">Daftar Sekarang</button>
            </a>

        </div>
    </div>
</nav>
