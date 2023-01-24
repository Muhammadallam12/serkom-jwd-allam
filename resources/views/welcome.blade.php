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
                        <img src="{{ asset('assets/img/landing_page.jpg') }}" class="d-block w-100 shadow-sm"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/maskem.jpg') }}"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/kumpe3.jpg') }}" class="d-block w-100"
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
        <section class="wisata">
            <div class="container">
                <div class="judul">
                    <h2 class="mb-0">Wisata Kabupaten Banyumas</h2>
                    <p>Jelajahi Wisata Alam</p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card p-3 shadow">
                            <img src="{{ asset('assets/img/kumpe.jpg') }}" alt="">
                            <div class="text-center mt-3">
                                <h3 class="fw-bold">Telaga Kumpe</h3>
                                <p class="text-muted">Telaga Kumpe atau sering juga disebut Telaga Kumpe Cilongok
                                    Banyumas ini memiliki pemandangan alam yang sempurna untuk melepas rasa penat,
                                    stress, dan lelah setelah sepekan berkerja.</p>
                            </div>

                            <a href="/kumpe" class="btn btn-primary w-100 btn-detail">Detail Wisata</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow">
                            <img src="{{ asset('assets/img/maskem.jpg') }}" alt="">
                            <div class="text-center mt-3">
                                <h3 class="fw-bold">Taman Mas Kemambang</h3>
                                <p class="text-muted">Taman Balai Kemambang atau Taman Apung Mas Kemambang adalah salah
                                    satu destinasi wisata Purwokerto atau Kabupaten Banyumas yang sedang jadi primadona
                                    saat ini.

                                </p>
                            </div>

                            <a href="/maskem" class="btn btn-primary w-100 btn-detail">Detail Wisata</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow">
                            <img src="{{ asset('assets/img/bukit.jpg') }}" alt="">
                            <div class="text-center mt-3">
                                <h3 class="fw-bold">Bukit Agaran</h3>
                                <p class="text-muted">Wisata bukit Agaran merupakan salah satu tempat wisata bukit yang wajib
                                    anda kunjungi bila sedang berlibur ke Purwokerto, Jawa Tengah, karena bisa melihat pemandangan kota purwokerto.</p>
                            </div>

                            <a href="/bukit" class="btn btn-primary w-100 btn-detail">Detail Wisata</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
