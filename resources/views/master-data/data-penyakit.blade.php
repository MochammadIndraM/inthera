@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <h3>Data Penyakit</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Penyakit</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPenyakit">
                        Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Kode Penyakit</th>
                                <th>Nama Penyakit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyakiters as $penyakit)
                                <tr>
                                    <td>{{ $penyakit->kode_penyakit }}</td>
                                    <td>{{ $penyakit->nama_penyakit }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditPenyakit" data-id="{{ $penyakit->kode_penyakit }}"
                                            data-kode="{{ $penyakit->kode_penyakit }}"
                                            data-nama="{{ $penyakit->nama_penyakit }}"
                                            data-url="{{ route('penyakit.update', ['kode_penyakit' => $penyakit->kode_penyakit]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusPenyakit" data-id="{{ $penyakit->kode_penyakit }}"
                                            data-url="{{ route('penyakit.destroy', ['kode_penyakit' => $penyakit->kode_penyakit]) }}">
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
    <div class="modal fade" id="modalTambahPenyakit" tabindex="-1" aria-labelledby="modalTambahPenyakitLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPenyakitLabel">Tambah Data Penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="{{ route('penyakit.store') }}" method="POST">
                    @csrf
                    <div class="modal-body row g-3">
                        <div class="col-md-12">
                            <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                            <input type="text" class="form-control" id="kode_penyakit" name="kode_penyakit"
                                value="{{ $nextKode }}" readonly required>
                        </div>
                        <div class="col-md-12">
                            <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                            <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" required>
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
    <div class="modal fade" id="modalEditPenyakit" tabindex="-1" aria-labelledby="modalEditPenyakitLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditPenyakitLabel">Edit Data Penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formEditPenyakit">
                    @csrf
                    @method('PUT')
                    <div class="modal-body row g-3">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="col-md-12">
                            <label for="edit_kode_penyakit" class="form-label">Kode Penyakit</label>
                            <input type="text" class="form-control" id="edit_kode_penyakit" name="kode_penyakit" readonly
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="edit_nama_penyakit" class="form-label">Nama Penyakit</label>
                            <input type="text" class="form-control" id="edit_nama_penyakit" name="nama_penyakit"
                                required>
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
    <div class="modal fade" id="modalHapusPenyakit" tabindex="-1" aria-labelledby="modalHapusPenyakitLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusPenyakitLabel">Hapus Data Penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formHapusPenyakit">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data penyakit ini?</p>
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
        const modalEditPenyakit = document.getElementById('modalEditPenyakit'); // Update variable name
        modalEditPenyakit.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const id = button.getAttribute('data-id');
            const kode = button.getAttribute('data-kode');
            const nama = button.getAttribute('data-nama');
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Isi data ke dalam form modal
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_kode_penyakit').value = kode; // Fixed the ID here
            document.getElementById('edit_nama_penyakit').value = nama; // Updated to correct field


            // Update action URL
            const form = document.getElementById('formEditPenyakit'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>

    <script>
        const modalHapusPenyakit = document.getElementById('modalHapusPenyakit'); // Updated variable name
        modalHapusPenyakit.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Update action URL
            const form = document.getElementById('formHapusPenyakit'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>
@endsection
