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

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-center text-white vh-100 w-100"
        style="background: url('./assets/img/inthera-hero.png') center/cover no-repeat; margin-top: 0; padding-top: 80px;">
        <div class="container h-100 w-100">
            <div class="d-flex align-items-center justify-content-between h-100 w-100">
                <!-- Kolom Kiri -->
                <div class="w-50 text-start">
                    <h1 class="display-4 fw-bold">Sistem Deteksi Dini Penyakit Kelainan Darah</h1>
                    <a href="#learn-more" class="btn btn-primary btn-md mt-3 custom-btn">
                        Deteksi Sekarang
                    </a>
                </div>

                <!-- Kolom Kanan (Card Dokter) -->
                <div class="w-50 d-flex justify-content-end">
                    <div class="card shadow-sm" style="width: 14rem; border-radius: 12px;">
                        <img src="./assets/img/img-dokter.png" class="card-img-top" alt="Doctor Image"
                            style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold" style="color: #1A4C79; font-size: 1rem;">
                                dr. Wiwiek Probowati, Sp.PD, KHOM
                            </h5>
                            <p class="card-text text-muted" style="font-size: 0.85rem;">
                                PAKAR Sp. PD Hematologi & Onkologi Medik
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="background-color: #F2F7FF; padding: 50px 0;" id="keunggulan-section">
        <div class="container text-center">
            <h2>Keunggulan Sistem Deteksi Dini Penyakit Kelainan Darah</h2>
            <p class="mb-5">Sistem ini memberikan berbagai keuntungan bagi masyarakat dalam mendeteksi dini penyakit
                kelainan darah, membantu penanganan yang lebih cepat dan tepat.</p>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-info-circle"
                                    style="font-size: 1.5rem; color: #4C9EDE;"></i> 1. Memberikan Informasi Terkait
                                dengan Penyakit Kelainan Darah</h5>
                            <p class="card-text">Informasi yang disediakan pada sistem ini akurat dan terpercaya karena
                                didapatkan dari sumber-sumber yang dapat dipertanggungjawabkan. Pengguna dapat memahami
                                lebih dalam mengenai gejala, penyebab, dan pengobatan penyakit kelainan darah seperti
                                anemia, thalasemia, dan polisitemia vera.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-clipboard-check"
                                    style="font-size: 1.5rem; color: #4C9EDE;"></i> 2. Memberikan Rekomendasi Penanganan
                                Dini Penyakit Kelainan Darah</h5>
                            <p class="card-text">Setelah melakukan deteksi dini, sistem akan memberikan rekomendasi
                                langkah-langkah penanganan berdasarkan hasil deteksi dan gejala yang telah dialami,
                                membantu pengguna mengambil tindakan yang tepat sebelum penyakit berkembang lebih parah.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-clock"
                                    style="font-size: 1.5rem; color: #4C9EDE;"></i> 3. Mempermudah dan Mempercepat
                                Penemuan Penyakit Kelainan Darah</h5>
                            <p class="card-text">Sistem ini mempermudah penemuan penyakit kelainan darah karena
                                masyarakat dari semua kalangan dapat mengakses dan melakukan deteksi dini. Semakin
                                banyak masyarakat yang menggunakan sistem ini, semakin cepat proses penemuan kasus
                                kelainan darah dan mencegah komplikasi lebih lanjut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-heart"
                                    style="font-size: 1.5rem; color: #4C9EDE;"></i> 4. Membantu Masyarakat Mengetahui
                                Gejala Awal Penyakit Kelainan Darah</h5>
                            <p class="card-text">Dengan sistem deteksi dini ini, masyarakat dapat mengenali gejala awal
                                dari berbagai penyakit kelainan darah, seperti anemia defisiensi besi, thalasemia, dan
                                anemia hemolitik, sehingga dapat segera melakukan pemeriksaan lebih lanjut ke dokter.
                            </p>
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
