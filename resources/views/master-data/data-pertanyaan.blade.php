@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <h3>Data Gejala</h3>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Data Pertanyaan</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalTambahPertanyaan">
                        Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Kode Gejala</th>
                                <th>Pertanyaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pertanyaans as $pertanyaan)
                                <tr>
                                    <td>{{ $pertanyaan->kode_gejala }}</td>
                                    <td>{{ $pertanyaan->pertanyaan }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalEditPertanyaan" data-id="{{ $pertanyaan->kode_gejala }}"
                                            data-kode="{{ $pertanyaan->kode_gejala }}"
                                            data-pertanyaan="{{ $pertanyaan->pertanyaan }}"
                                            data-url="{{ route('pertanyaan.update', ['kode_gejala' => $pertanyaan->kode_gejala]) }}">
                                            <!-- Updated route -->
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusPertanyaan" data-id="{{ $pertanyaan->kode_gejala }}"
                                            data-url="{{ route('pertanyaan.destroy', ['kode_gejala' => $pertanyaan->kode_gejala]) }}">
                                            <!-- Updated route -->
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
    <div class="modal fade" id="modalTambahPertanyaan" tabindex="-1" aria-labelledby="modalTambahPertanyaanLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPertanyaanLabel">Tambah Data Pertanyaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="{{ route('pertanyaan.store') }}" method="POST"> <!-- Updated route -->
                    @csrf
                    <div class="modal-body row g-3">
                        <div class="col-md-12">
                            <label for="kode_gejala" class="form-label">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode_gejala" name="kode_gejala"
                                value="{{ $nextKode }}" readonly required>
                        </div>
                        <div class="col-md-12">
                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" required>
                            <!-- Updated name attribute -->
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
    <div class="modal fade" id="modalEditPertanyaan" tabindex="-1" aria-labelledby="modalEditPertanyaanLabel"
        aria-hidden="true"> <!-- Updated ID -->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditPertanyaanLabel">Edit Data Pertanyaan</h5> <!-- Updated title -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formEditPertanyaan"> <!-- Updated form ID -->
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
                            <label for="edit_pertanyaan" class="form-label">Pertanyaan</label>
                            <!-- Updated for attribute -->
                            <input type="text" class="form-control" id="edit_pertanyaan" name="pertanyaan" required>
                            <!-- Updated name attribute -->
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
    <div class="modal fade" id="modalHapusPertanyaan" tabindex="-1" aria-labelledby="modalHapusPertanyaanLabel"
        aria-hidden="true"> <!-- Updated modal ID -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusPertanyaanLabel">Hapus Data Pertanyaan</h5>
                    <!-- Updated title -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <form action="" method="POST" id="formHapusPertanyaan"> <!-- Updated form ID -->
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data pertanyaan ini?</p> <!-- Updated text -->
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
        const modalEditPertanyaan = document.getElementById('modalEditPertanyaan'); // Update variable name
        modalEditPertanyaan.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const id = button.getAttribute('data-id');
            const kode = button.getAttribute('data-kode');
            const pertanyaan = button.getAttribute('data-pertanyaan');
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Isi data ke dalam form modal
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_kode_gejala').value = kode; // Fixed the ID here
            document.getElementById('edit_pertanyaan').value = pertanyaan; // Updated to correct field


            // Update action URL
            const form = document.getElementById('formEditPertanyaan'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>

    <script>
        const modalHapusPertanyaan = document.getElementById('modalHapusPertanyaan'); // Updated variable name
        modalHapusPertanyaan.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Tombol yang diklik
            const url = button.getAttribute('data-url'); // Ambil URL dari atribut data-url

            // Update action URL
            const form = document.getElementById('formHapusPertanyaan'); // Updated to correct form ID
            form.action = url; // Gunakan URL dari atribut data-url
        });
    </script>
@endsection
