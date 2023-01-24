<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Banyumasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css">
</head>

<body>
    <!-- navbar -->
    @include('navbar')

    <header class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/bukit.jpg') }}" class="d-block w-100 shadow-sm"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/bukit2.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/bukit3.png') }}" class="d-block w-100" alt="...">
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
                <div class="col-md-6">
                    <div class="card p-3">
                        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="wNHMlJs-UrA"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="wisata">
            <div class="container">

                <div class="judul">
                    <h2 class="mb-3">Bukit Agaran</h2>
                    <h3>Rp 15.000/Orang</h3>
                    <p>Wisata bukit Agaran merupakan salah satu tempat wisata yang wajib anda kunjungi bila sedang
                        berlibur ke Purwokerto, Jawa Tengah.

                        Pasalnya, dengan anda berkunjung kesana, anda akan disuguhkan dengan keindahan kota Purwokerto
                        dari atas ketinggian.

                        Jangan khawatir, jika anda takut dengan ketinggian, wisata bukit Agaran ini sudah memiliki
                        keamanan yang baik.</p>
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
    <script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            const player = new Plyr('#player');

            // Expose
            window.player = player;

            // Bind event listener
            function on(selector, type, callback) {
                document.querySelector(selector).addEventListener(type, callback, false);
            }

            // Play
            on('.js-play', 'click', () => {
                player.play();
            });

            // Pause
            on('.js-pause', 'click', () => {
                player.pause();
            });

            // Stop
            on('.js-stop', 'click', () => {
                player.stop();
            });

            // Rewind
            on('.js-rewind', 'click', () => {
                player.rewind();
            });

            // Forward
            on('.js-forward', 'click', () => {
                player.forward();
            });
        });
    </script>
</body>

</html>
