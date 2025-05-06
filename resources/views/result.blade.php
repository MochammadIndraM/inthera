<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inthera</title>

    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">

    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body style="background-color: #F2F7FF; margin: 0; padding: 0;">

    @include('layouts.navbar')

    ;

    <section class="d-flex justify-content-center align-items-center">
        <div class="container mt-5">

            {{-- Card Gejala yang Dipilih --}}
            <div class="card w-100" style="max-width: 1300px; margin-top: 30px; padding: 30px;">
                <div class="card-header">
                    <h3>Gejala Anamnesis (Wawancara Medis) Yang Dialami Oleh Pasien:</h3>
                </div>
                <div class="card-body">
                    @if ($gejala->count() > 0)
                        <div class="row">
                            @foreach ($gejala as $g)
                                <div class="col-md-4">
                                    <div class="list-group-item">{{ $g->nama_gejala }}</div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Tidak ada gejala yang dipilih.</p>
                    @endif
                </div>
            </div>
            {{-- Card Kesimpulan --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card w-100" style="margin-top: 30px; padding: 30px; height: 100%;">
                        <div class="card-header">
                            <h3 style="font-size: 1.5rem;">Kesimpulan dan Hasil Deteksi</h3>
                        </div>
                        <div class="card-body">
                            @if ($penyakit)
                                <p>BERDASARKAN GEJALA ANAMNESIS YANG DIALAMI OLEH PASIEN MAKA SISTEM MENDETEKSI BEBERAPA PENYAKIT YANG DIALAMI:
                                </p>
                                @foreach ($hasil as $kode => $cf)
                                    @if (number_format($cf * 100, 2) == number_format($nilaiCfTertinggi * 100, 2))
                                        @php
                                            $p = \App\Models\Penyakit::where('kode_penyakit', $kode)->first();
                                        @endphp
                                        <div class="alert alert-success text-center"
                                            style="font-size: 1.2rem; font-weight: bold;">
                                            {{ $p->nama_penyakit ?? $kode }} - {{ number_format($cf * 100, 2) }}%
                                        </div>
                                    @endif
                                @endforeach
                                <h5 class="mt-3">
                                    Disclaimer:
                                </h5>
                                <p class="mt-3" style="color: red;">
                                    Hasil deteksi dini ini merupakan hasil dugaan sementara berdasarkan
                                    gejala yang Anda alami memiliki kemiripan dengan penyakit pada poin KESIMPULAN.
                                    Untuk mendapatkan hasil diagnosa penyakit yang tepat, segera konsultasikan kepada
                                    Dokter Spesialis Hematologi atau lakukan penelitian laboratorium lebih lanjut di fasilitas kesehatan terdekat.
                                </p>
                                <h5 class="mt-4">Hasil Deteksi:</h5>
                                @if (count($hasil) > 0)
                                    <table class="table table-bordered mt-3">
                                        <thead>
                                            <tr>
                                                <th>Penyakit</th>
                                                <th>Persentase</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hasil as $kode => $cf)
                                                @php
                                                    $p = \App\Models\Penyakit::where('kode_penyakit', $kode)->first();
                                                @endphp
                                                <tr>
                                                    <td>{{ $p->nama_penyakit ?? $kode }}</td>
                                                    <td>{{ number_format($cf * 100, 2) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>Maaf, tidak ada penyakit yang terdeteksi berdasarkan gejala yang Anda pilih.</p>
                                @endif
                            @else
                                <p>Maaf, tidak ada kesimpulan yang dapat diambil berdasarkan gejala yang Anda pilih.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer-index')

</body>


<!-- Link ke GSAP dan ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

<script src="assets/static/js/components/dark.js"></script>
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<script src="assets/compiled/js/app.js"></script>
<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/static/js/pages/simple-datatables.js"></script>
<script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/static/js/pages/sweetalert2.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tombol Selanjutnya
        document.querySelectorAll('.btn-selanjutnya').forEach(function(button) {
            button.addEventListener('click', function() {
                const nextTab = document.querySelector(this.dataset.target + '-list');
                if (nextTab) nextTab.click();
            });
        });

        // Tombol Kembali
        document.querySelectorAll('.btn-kembali').forEach(function(button) {
            button.addEventListener('click', function() {
                const prevTab = document.querySelector(this.dataset.target + '-list');
                if (prevTab) prevTab.click();
            });
        });
    });
</script>


<script>
    // Animasi untuk Hero Section dengan Smooth Card
    gsap.from(".hero .container h1", {
        opacity: 0,
        y: -50,
        duration: 1.5,
        delay: 0.3,
        ease: "power4.out"
    });

    gsap.from(".hero .custom-btn", {
        opacity: 0,
        y: 50,
        duration: 1,
        delay: 0.6,
        ease: "power4.out"
    });

    // Inisialisasi GSAP untuk animasi saat halaman dimuat
    gsap.from("#keunggulan-section", {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: "power2.out"
    });

    gsap.from("h2", {
        opacity: 0,
        x: -50,
        duration: 1,
        delay: 0.3, // Memberi delay agar animasi lebih berurutan
        ease: "power2.out"
    });

    gsap.from("p.mb-5", {
        opacity: 0,
        x: 50,
        duration: 1,
        delay: 0.5,
        ease: "power2.out"
    });

    gsap.from(".card", {
        opacity: 0,
        y: 50,
        duration: 1,
        stagger: 0.2, // Memberi efek animasi pada setiap card dengan interval
        delay: 0.7,
        ease: "power2.out"
    });

    gsap.from("p", {
        opacity: 0,
        y: 20,
        duration: 1,
        stagger: 0.2, // Memberikan interval untuk setiap elemen p
        delay: 1, // Menambahkan delay agar animasi tidak langsung
        ease: "power2.out"
    });
</script>

</html>
