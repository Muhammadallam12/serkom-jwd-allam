<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Banyumasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- navbar -->
    @include('navbar')

    <header class="mt-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/bukit.jpg') }}" class="d-block w-100 shadow-sm"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/maskem.jpg') }}"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/kumpe.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="mt-4 mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src=" https://api.qrserver.com/v1/create-qr-code/?data=Mukhamad Fatkhul Allam Ulya"
                                        class="img-fluid w-100 h-100" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="fw-bold mb-4 text-center mt-3">Tiket Pemesanan Anda</h2>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nama Wisata</th>
                                                <td>:</td>
                                                <td>{{ $pesan->tempat_wisata }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Lengkap</th>
                                                <td>:</td>
                                                <td>{{ $pesan->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No Identitas</th>
                                                <td>:</td>
                                                <td>{{ $pesan->no_identitas }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No Handphone</th>
                                                <td>:</td>
                                                <td>{{ $pesan->no_hp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jadwal Berangkat</th>
                                                <td>:</td>
                                                <td>{{ $pesan->tgl_kunjungan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Penumpang Dewasa</th>
                                                <td>:</td>
                                                <td>{{ $pesan->pengunjung_dewasa }} Orang</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Penumpang Anak Anak</th>
                                                <td>:</td>
                                                <td>{{ $pesan->pengunjung_anak }} Orang</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total harga</th>
                                                <td>:</td>
                                                <td>Rp {{ number_format($pesan->total) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="text-center text-lg-start text-muted shadow-sm">
        <!-- Copyright -->
        <div class="text-center text-light p-4">
            © 2023 Copyright Made With
            <a class="text-reset" href="/">Wisata Banyumasan</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
