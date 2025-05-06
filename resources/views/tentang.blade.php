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


    <section class="py-5 d-flex align-items-center" style="background-color: #F2F7FF; min-height: 100vh;">
        <div class="container mt-10">
            <!-- System Description -->
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>Tentang Inthera</h2>
                    <p>Inthera adalah sistem pakar yang dirancang untuk mendeteksi dini penyakit kelainan darah seperti
                        Anemia, Thalasemia, dan Polisitemia Vera. Sistem ini menggunakan metode forward chaining untuk
                        menganalisis gejala-gejala yang dialami pasien dan memberikan rekomendasi yang sesuai
                        berdasarkan data yang ada. Inthera dikembangkan di Politeknik Negeri Jember dan telah divalidasi
                        oleh pakar medis berkompeten di bidangnya. Sistem ini memiliki tingkat akurasi yang tinggi dalam
                        membantu diagnosis penyakit darah dengan cepat dan tepat.</p>
                </div>
            </div>


            <!-- Team Members -->
            <div class="row gx-4 justify-content-center">
                <!-- Developer -->
                <div class="col-10 col-sm-6 col-lg-3 mb-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="./assets/img/indraaa.jpg"class="card-img-top img-fluid object-fit-cover"
                             style="height: 350px;" alt="Mochammad Indra Maulidana">
                        <div class="card-body text-center p-2">
                            <h6 class="fw-semibold text-primary mb-1">Mochammad Indra Maulidana</h6>
                            <p class="text-muted small mb-1">Developer</p>
                            <p class="small mb-0">Politeknik Negeri Jember</p>
                        </div>
                    </div>
                </div>

                <!-- Doctor -->
                <div class="col-10 col-sm-6 col-lg-3 mb-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="./assets/img/img-dokter.png"class="card-img-top img-fluid object-fit-cover"
                             style="height: 350px;" alt="dr. Wiwiek Probowati">
                        <div class="card-body text-center p-2">
                            <h6 class="fw-semibold text-primary mb-1">dr. Wiwiek Probowati, Sp.PD-KHOM</h6>
                            <p class="text-muted small mb-1">Pakar</p>
                            <p class="small mb-0">Sp. PD Hematologi & Onkologi Medik</p>
                        </div>
                    </div>
                </div>

                <!-- Designer -->
                <div class="col-10 col-sm-6 col-lg-3 mb-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="./assets/img/buvani.jpg"class="card-img-top img-fluid object-fit-cover"
                              style="height: 350px;" alt="Zilvanhisma Emka Fitri">
                        <div class="card-body text-center p-2">
                            <h6 class="fw-semibold text-primary mb-1">Zilvanhisma Emka Fitri, S.S.T.M.T</h6>
                            <p class="text-muted small mb-1">Dosen Pembimbing</p>
                            <p class="small mb-0">Politeknik Negeri Jember</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Member -->
                <div class="col-10 col-sm-6 col-lg-3 mb-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="./assets/img/paktama.jpg" class="card-img-top img-fluid object-fit-cover"
                              style="height: 350px;" alt="Ir. Arizal Mujibtamala Nanda Imron, ST., MT">
                        <div class="card-body text-center p-2">
                            <h6 class="fw-semibold text-primary mb-1">Ir. Arizal Mujibtamala Nanda Imron, ST., MT</h6>
                            <p class="text-muted small mb-1">Dosen Pembimbing</p>
                            <p class="small mb-0">Universitas Jember</p>
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
