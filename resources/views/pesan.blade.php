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
                        <img src="{{ asset('assets/img/kumpe.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/maskem.jpg') }}" class="d-block w-100" alt="...">
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
                    <h2 class="mb-0">Form Pemesanan</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="card p-3">
                            <form action="{{ route('pesan') }}" method="POST">
                                @csrf
                                <input type="number" hidden="" value="" name="total" id="total_harga">
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="name" class="col-form-label">Nama Lengkap</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="nama" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="identitas" class=" col-form-label">Nomor Identitas</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="identitas" name="no_identitas" class=" form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="handphone" class=" col-form-label">No Hp</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="handphone" name="no_hp" class=" form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="handphone" class=" col-form-label">Tempat Wisata</label>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" aria-label="Default select example" name="wisata" id="wisata"
                                            name="tempat_wisata">
                                            <option value="" data-harga="">Pilih Wisata</option>
                                            <option value="Telaga Kumpe" data-harga="5000">Telaga Kumpe</option>
                                            <option value="Taman Mas Kemambang" data-harga="10000">Taman Mas Kemambang</option>
                                            <option value="Bukit Agaran" data-harga="15000">Bukit Agaran</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="jadwal" class=" col-form-label">Tanggal Kunjungan</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="date" id="jadwal" name="tgl_kunjungan"
                                            class=" form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="normal" class=" col-form-label">Pengunjung Dewasa</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="normal" name="pengunjung_dewasa"
                                            class=" form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="lansia" class=" col-form-label">Pengunjung Anak-Anak</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="lansia" name="pengunjung_anak"
                                            class=" form-control">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="lansia" class=" col-form-label">Harga Tiket</label>
                                    </div>
                                    <div class="col-8">
                                        <p class="fw-bold mt-2" id="tiket_harga">0</p>
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center mb-0 mt-0">
                                    <div class="col-4">
                                        <label for="lansia" class=" col-form-label">Total Bayar</label>
                                    </div>
                                    <div class="col-8">
                                        <p class="fw-bold" id="total" nama="total">Rp 0</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Saya dan/atau rombongan telah
                                        membaca,
                                        memahami dan setuju berdasarkan syarat dan ketentuan yang telah
                                        diterapkan</label>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary w-100" id="hitung">Hitung
                                            Total
                                            Bayar</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-success w-100"
                                            id="pesan">Pesan
                                            Tiket</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-danger w-100"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div id="chart"></div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript">
        $("#wisata").each(function() {
            $(this).change(function() {
                var harga = $(this).find(":selected").data('harga')
                $('#tiket_harga').html(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumSignificantDigits: 3
                }).format(harga));
            });
        });
        $(document).ready(function() {
            $("#hitung").click(function() {
                var harga = $('#wisata').find(":selected").data('harga')
                var dewasa = $('#normal').val();
                var anak = $('#lansia').val();

                if (!anak) {
                    var total = dewasa * harga;
                } else {
                    var harga_anak = harga * 50 / 100;
                    var harga_akhir_anak = anak * harga_anak;
                    var harga_dewasa = harga * dewasa;
                    var total = harga_dewasa + harga_akhir_anak;
                }

                $('#total_harga').val(total);
                $('#total').html(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumSignificantDigits: 3
                }).format(total));
            });
        });
    </script>
</body>

</html>
