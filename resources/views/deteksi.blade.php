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
        <div class="card w-100" style="max-width: 1300px; margin-top: 150px; padding: 30px;">
            <div class="mb-4 text-center">
                <h2 class="fw-bold">Sistem Deteksi Dini Penyakit Kelainan Darah</h2>
                <p>Perhatikan pertanyaan di bawah dengan teliti. Jawablah pertanyaan berikut sesuai dengan tingkat
                    keyakinan yang Anda alami.</p>
            </div>
            @php
                $chunks = $deteksi->chunk(5);
            @endphp

            <form id="form-deteksi" action="{{ route('deteksi.store') }}" method="POST">
                @csrf

                <div class="list-group list-group-horizontal-sm mb-2 text-center" role="tablist">
                    @foreach ($chunks as $index => $group)
                        <a class="list-group-item list-group-item-action {{ $index === 0 ? 'active' : '' }}"
                            id="list-pertanyaan{{ $index + 1 }}-list" data-bs-toggle="list"
                            href="#list-pertanyaan{{ $index + 1 }}" role="tab">{{ $index + 1 }}</a>
                    @endforeach
                </div>

                <div class="tab-content text-justify">
                    @foreach ($chunks as $index => $group)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                            id="list-pertanyaan{{ $index + 1 }}" role="tabpanel"
                            aria-labelledby="list-pertanyaan{{ $index + 1 }}-list">
                            @foreach ($group as $key => $pertanyaan)
                                <p class="card-text fw-semibold mb-4 mt-4" style="font-size: 18px;">
                                    {{ $pertanyaan->pertanyaan }}
                                </p>
                                @php $inputName = 'cf' . str_pad($loop->parent->index * $group->count() + $loop->index + 1, 2, '0', STR_PAD_LEFT); @endphp
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="1.0" id="{{ $inputName }}-1">
                                    <label class="form-check-label" for="{{ $inputName }}-1"
                                        style="font-size: 18px;">Sangat Yakin</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="0.8" id="{{ $inputName }}-2">
                                    <label class="form-check-label" for="{{ $inputName }}-2"
                                        style="font-size: 18px;">Yakin</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="0.6" id="{{ $inputName }}-3">
                                    <label class="form-check-label" for="{{ $inputName }}-3"
                                        style="font-size: 18px;">Cukup Yakin</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="0.4" id="{{ $inputName }}-4">
                                    <label class="form-check-label" for="{{ $inputName }}-4"
                                        style="font-size: 18px;">Ragu-ragu</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="0.2" id="{{ $inputName }}-5">
                                    <label class="form-check-label" for="{{ $inputName }}-5"
                                        style="font-size: 18px;">Tidak Yakin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{ $inputName }}"
                                        value="0.0" id="{{ $inputName }}-6">
                                    <label class="form-check-label" for="{{ $inputName }}-6"
                                        style="font-size: 18px;">Sangat Tidak Yakin</label>
                                </div>
                            @endforeach
                            <div class="d-flex justify-content-between mt-4">
                                {{-- Tombol Kembali (mulai dari tab ke-2) --}}
                                @if ($index > 0)
                                    {{-- Tombol Kembali --}}
                                    <button type="button" class="btn btn-secondary btn-kembali"
                                        data-target="#list-pertanyaan{{ $index }}"
                                        style="width: 150px; height: 40px;">
                                        Kembali
                                    </button>
                                @else
                                    <div></div> <!-- Placeholder biar tombol tetap rata kanan -->
                                @endif

                                {{-- Tombol Selanjutnya atau Submit --}}
                                @if ($index === count($chunks) - 1)
                                    <button type="button" class="btn btn-success" id="btn-selesai"
                                        style="width: 150px; height: 40px;">
                                        Selesai
                                    </button>
                                @else
                                    {{-- Tombol Selanjutnya --}}
                                    <button type="button" class="btn btn-primary btn-selanjutnya"
                                        data-target="#list-pertanyaan{{ $index + 2 }}"
                                        style="width: 150px; height: 40px;">
                                        Selanjutnya
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

            </form>



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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('btn-selesai').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah form submit otomatis

        const form = document.getElementById('form-deteksi');
        const tabs = form.querySelectorAll('.tab-pane'); // Ambil semua tab
        const tabLinks = form.querySelectorAll('.list-group-item'); // Ambil semua link tab
        let semuaTerisi = true;
        let firstUnfilledTab = null; // Menyimpan tab pertama yang belum diisi

        // Loop untuk mengecek apakah ada input radio yang belum dipilih di setiap tab
        for (let i = 0; i < tabs.length; i++) {
            const tab = tabs[i];
            const radios = tab.querySelectorAll('input[type="radio"]'); // Ambil semua radio button di tab ini
            let tabIsFilled = true; // Mengasumsikan tab ini sudah terisi

            radios.forEach((radio) => {
                const groupName = radio.name;
                // Cek apakah ada radio button yang belum dipilih
                if (!form.querySelector(`input[name="${groupName}"]:checked`)) {
                    tabIsFilled = false; // Jika ada input yang belum diisi, tab ini belum terisi
                    // Simpan tab pertama yang belum diisi
                    if (!firstUnfilledTab) {
                        firstUnfilledTab = tab;
                    }
                }
            });

            // Jika tab ini belum terisi, kita perlu menandai tab tersebut
            if (!tabIsFilled) {
                semuaTerisi = false;
                // Menghapus kelas active untuk semua tab
                tabLinks.forEach(link => link.classList.remove('active'));
                tabs.forEach(tab => tab.classList.remove('show', 'active'));

                // Menambahkan kelas active untuk tab yang belum terisi
                tabLinks[i].classList.add('active');
                tab.classList.add('show', 'active');
                break; // Keluar dari loop setelah menemukan tab pertama yang belum terisi
            }
        }

        // Jika ada tab yang belum terisi, arahkan ke tab pertama yang belum terisi
        if (!semuaTerisi) {
            // Hanya tampilkan tab pertama yang belum terisi
            if (firstUnfilledTab) {
                firstUnfilledTab.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                    inline: 'nearest'
                });
            }

            // Tampilkan peringatan menggunakan SweetAlert
            setTimeout(() => {
                Swal.fire({
                    title: 'Oops!',
                    text: 'Semua gejala harus dipilih terlebih dahulu.',
                    icon: 'warning',
                    confirmButtonText: 'Oke'
                });
            }, 500);

            return; // Hentikan eksekusi, tidak lanjut ke submit
        }

        // Jika semua terisi, lanjutkan dengan konfirmasi SweetAlert
        Swal.fire({
            title: 'Peringatan',
            text: 'Proses deteksi dini ini menggunakan metode Forward Chaining dan Certainty Factor. Hasil yang didapatkan tidak bersifat mutlak. Jika Anda teridentifikasi memiliki penyakit kelainan darah, segera konsultasikan ke dokter spesialis Hematologi.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#aaa',
            confirmButtonText: 'Ya, proses',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit form jika konfirmasi "Ya" dipilih
            }
        });
    });
</script>


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
