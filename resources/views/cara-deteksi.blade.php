<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Deteksi - Inthera</title>

    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body style="background-color: #F2F7FF; margin: 0; padding: 0;">

    @include('layouts.navbar')


    <section class="d-flex justify-content-center align-items-center">
        <div class="card w-100" style="max-width: 1300px; margin-top: 150px; padding: 30px;">
            <div class="container mt-3">
                <h1 class="text-center fw-bold">Cara Deteksi Penyakit Kelainan Darah</h1>
                <p class="text-justify" style="font-size: 18px;">
                    Sistem ini menggunakan metode <strong>Forward Chaining</strong> dan <strong>Certainty
                        Factor</strong> untuk mendeteksi kemungkinan penyakit kelainan darah. Berikut adalah
                    langkah-langkah yang perlu Anda ikuti:
                </p>
                <ol style="font-size: 18px; line-height: 1.8;">
                    <li>
                        <strong>Persiapkan Diri:</strong> Pastikan Anda berada di tempat yang tenang dan fokus untuk
                        menjawab pertanyaan dengan jujur.
                    </li>
                    <li>
                        <strong>Baca Pertanyaan dengan Teliti:</strong> Sistem akan menampilkan beberapa pertanyaan
                        terkait gejala yang mungkin Anda alami. Bacalah setiap pertanyaan dengan saksama.
                    </li>
                    <li>
                        <strong>Pilih Tingkat Keyakinan:</strong> Untuk setiap pertanyaan, pilih tingkat keyakinan Anda
                        terhadap gejala yang Anda alami. Pilihan yang tersedia adalah:
                        <ul>
                            <li><strong>Sangat Yakin:</strong> Anda sangat yakin mengalami gejala tersebut.</li>
                            <li><strong>Yakin:</strong> Anda yakin mengalami gejala tersebut.</li>
                            <li><strong>Cukup Yakin:</strong> Anda cukup yakin mengalami gejala tersebut.</li>
                            <li><strong>Ragu-ragu:</strong> Anda ragu apakah mengalami gejala tersebut.</li>
                            <li><strong>Tidak Yakin:</strong> Anda tidak yakin mengalami gejala tersebut.</li>
                            <li><strong>Sangat Tidak Yakin:</strong> Anda sangat yakin tidak mengalami gejala tersebut.
                            </li>
                        </ul>
                    </li>
                    <li>
                        <strong>Isi Semua Pertanyaan:</strong> Pastikan Anda menjawab semua pertanyaan sebelum
                        melanjutkan ke langkah berikutnya.
                    </li>
                    <li>
                        <strong>Konfirmasi dan Proses:</strong> Setelah semua pertanyaan terjawab, sistem akan meminta
                        konfirmasi untuk memproses hasil deteksi. Klik tombol <strong>Proses</strong> untuk melanjutkan.
                    </li>
                    <li>
                        <strong>Lihat Hasil:</strong> Sistem akan menampilkan hasil deteksi berdasarkan gejala yang Anda
                        pilih. Hasil ini tidak bersifat mutlak dan hanya sebagai panduan awal.
                    </li>
                    <li>
                        <strong>Konsultasi ke Dokter:</strong> Jika hasil deteksi menunjukkan kemungkinan adanya
                        penyakit kelainan darah, segera konsultasikan ke dokter spesialis Hematologi untuk pemeriksaan
                        lebih lanjut.
                    </li>
                </ol>
            </div>
        </div>
    </section>

    @include('layouts.footer-index')

</body>

</html>
