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

    <main>
        <section class="wisata">
            <div class="container">
                <div class="judul">
                    <h2 class="mb-2">Wisata Kabupaten Banyumasan</h2>
                    <p>Kabupaten Banyumas memiliki keanekaragam wisata dari wisata alam, wisata religi, hingga wisata
                        pendidikan yaitu musium. Pemerintah daerah berupaya mengembangkan daerah wisata ini, sehingga
                        terjadi peningkatan jumlah obyek wisata dari 10 obyek wisata di tahun 2002 hingga mencapai 14
                        obyek wisata ditahun 2013.

                        Berbagai jenis wisata yang banyak dikunjungan wisatawa lokal maupun wisatawanmanca nergara di
                        daerah Kabupaten Bayumas terbagi menjadi wisata alam, wisata budaya, wisata religi. Perkembangan
                        yang cepat terjadi ditahun 2009 dari 11 lokasi wisata menjadi 13 lokasi wisata di tahun 2011.

                    </p>
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
                            <h4 class="text-center">Rp 5.000/orang</h4>
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
                            <h4 class="text-center">Rp 10.000/orang</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow">
                            <img src="{{ asset('assets/img/bukit.jpg') }}"
                                alt="">
                            <div class="text-center mt-3">
                                <h3 class="fw-bold">Bukit Agaran</h3>
                                <p class="text-muted">Wisata bukit Agaran merupakan salah satu tempat wisata yang wajib anda kunjungi bila sedang berlibur ke Purwokerto, Jawa Tengah. Sangat cocok untuk melihat kota purwokerto dari atas</p>
                            </div>
                            <h4 class="text-center">Rp 15.000/orang</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center text-lg-start text-muted shadow-sm">
        <!-- Copyright -->
        <div class="text-center text-light p-4">
            © 2022 Copyright Made With
            <a class="text-reset" href="/">Wisata Banyumasan</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
