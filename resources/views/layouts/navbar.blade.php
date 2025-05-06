<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white"
    style="position: fixed; top: 30px; left: 50%; transform: translateX(-50%); z-index: 9999; width: 100%; max-width: 1400px; height: 80px; border-radius: 50px; padding: 0.5rem 2rem; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center fw-bold" href="#beranda" style="font-size: 1.5rem;">
            <img src="{{ asset('assets/img/inthera-logo.png') }}" alt="Logo" style="height: 35px; width: auto;"
                class="me-2">
        </a>

        <!-- Tombol Toggle (Mode Responsif) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-4">
                <li class="nav-item"><a class="nav-link" href="/"
                        style="color: #2A5876; font-weight: 600;">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/cara-deteksi"
                        style="color: #2A5876; font-weight: 600;">Cara Deteksi</a></li>
                <li class="nav-item"><a class="nav-link" href="/tentang"
                        style="color: #2A5876; font-weight: 600;">Tentang</a></li>
            </ul>

            <!-- Tombol Mulai Deteksi -->
            <a href="/deteksi" class="btn btn-primary ms-4"
                style="background-color: #2A5876; border: none; border-radius: 30px; padding: 0.75rem 1.5rem; transition: background-color 0.3s ease;"
                onmouseover="this.style.backgroundColor='#347A9E'" onmouseout="this.style.backgroundColor='#2A5876'">
                Mulai Deteksi
            </a>

        </div>
    </div>
</nav>
