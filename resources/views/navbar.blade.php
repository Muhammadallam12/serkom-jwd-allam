<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Bootstrap" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/harga">Harga Tiket Wisata</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daftar Wisata
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/kumpe">Telaga Kumpe</a></li>
                        <li><a class="dropdown-item" href="/maskem">Taman Mas Kemambang</a></li>
                        <li><a class="dropdown-item" href="/bukit">Bukit Agaran</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chart">Grafik Pemesanan</a>
                </li>
            </ul>
            <a href="/pesan" class="btn btn-primary btn-login">Beli Tiket</a>
        </div>
    </div>
</nav>
