@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <h3>Data Gejala</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Gejala</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahGejala">
                        Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Kode Gejala</th>
                                <th>Nama Gejala</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejalas as $gejala)
                                <tr>
                                    <td>{{ $gejala->kode_gejala }}</td>
                                    <td>{{ $gejala->nama_gejala }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditGejala" data-id="{{ $gejala->kode_gejala }}"
                                            data-kode="{{ $gejala->kode_gejala }}" data-nama="{{ $gejala->nama_gejala }}"
                                            data-url="{{ route('gejala.update', ['kode_gejala' => $gejala->kode_gejala]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusGejala" data-id="{{ $gejala->kode_gejala }}"
                                            data-url="{{ route('gejala.destroy', ['kode_gejala' => $gejala->kode_gejala]) }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

    {{-- modal tambah --}}
    <div class="modal fade" id="modalTambahGejala" tabindex="-1" aria-labelledby="modalTambahGejalaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahGejalaLabel">Tambah Data Gejala</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="{{ route('gejala.store') }}" method="POST">
                    @csrf
                    <div class="modal-body row g-3">
                        <div class="col-md-12">
                            <label for="kode_gejala" class="form-label">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala"
                                value="{{ $nextKode }}" readonly required>
                        </div>
                        <div class="col-md-12">
                            <label for="nama_gejala" class="form-label">Nama Gejala</label>
                            <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" required>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="modal fade" id="modalEditGejala" tabindex="-1" aria-labelledby="modalEditGejalaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditGejalaLabel">Edit Data Gejala</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formEditGejala">
                    @csrf
                    @method('PUT')
                    <div class="modal-body row g-3">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="col-md-12">
                            <label for="edit_kode_gejala" class="form-label">Kode Gejala</label>
                            <input type="text" class="form-control" id="edit_kode_gejala" name="kode_gejala" readonly
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="edit_nama_gejala" class="form-label">Nama Gejala</label>
                            <input type="text" class="form-control" id="edit_nama_gejala" name="nama_gejala" required>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal hapus --}}
    <div class="modal fade" id="modalHapusGejala" tabindex="-1" aria-labelledby="modalHapusGejalaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusGejalaLabel">Hapus Data Gejala</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formHapusGejala"> <!-- Updated form ID -->
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data gejala ini?</p> <!-- Updated text -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const modalEditGejala = document.getElementById('modalEditGejala'); // Update variable name
        modalEditGejala.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const id = button.getAttribute('data-id');
            const kode = button.getAttribute('data-kode');
            const nama = button.getAttribute('data-nama');
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Isi data ke dalam form modal
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_kode_gejala').value = kode; // Fixed the ID here
            document.getElementById('edit_nama_gejala').value = nama; // Updated to correct field


            // Update action URL
            const form = document.getElementById('formEditGejala'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>

    <script>
        const modalHapusGejala = document.getElementById('modalHapusGejala'); // Updated variable name
        modalHapusGejala.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Update action URL
            const form = document.getElementById('formHapusGejala'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>
@endsection
