@extends('layout.admin')

@section('storeForm')
    <div class="container shadow pt-2 mt-2" style="width: 800px">
        <form class="row g-3 d-flex" action="/admin/store" method="POST">
            @csrf
            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Biodata Pegawai</h5>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="inputNik4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="inputAddress" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Udin syamsudin">
            </div>
            <div class="col-md-4">
                <label for="inputRole" class="form-label">User</label>
                <input type="text" name="pegawai" class="form-control" id="inputRole" value="pegawai" disabled>
            </div>
            <div class="col-md-8">
                <label for="inputAddress2" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="inputAddress2" placeholder="324...">
            </div>
            <div class="col-md-6">
                <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                <input type="text" name="status_perkawinan" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="kartu_pegawai" class="form-label">Kartu Pegawai</label>
                <input type="text" name="kartu_pegawai" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label for="inputAddress2" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="inputAddress2"
                    placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="inputCity">
            </div>
            <fieldset class="col-md-4">
                <legend class="col-form-label">Jenis Kelamin</legend>
                <div class="col-sm-10 d-flex">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1">
                        <label class="form-check-label" for="jenis_kelamin1">
                            L
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2"
                            value="option2">
                        <label class="form-check-label" for="jenis_kelamin2">
                            P
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="col-md-4">
                <label for="TMT_KGB_terakhir" class="form-label">TMT KGB Terakhir:</label>
                <input type="date" name="TMT_KGB_terakhir" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="kenaikan_KGB_YAD" class="form-label">Kenaikan KGB YAD:</label>
                <input type="date" name="kenaikan_KGB_YAD" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="TMT_pensiun" class="form-label">TMT Pensiun:</label>
                <input type="date" name="TMT_pensiun" class="form-control" required>
            </div>

            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Pendidikan Pegawai</h5>
            </div>

            <div class="col-md-12">
                <label for="nama_pendidikan" class="form-label">Nama Pendidikan:</label>
                <input type="text" name="nama_pendidikan" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="gelar" class="form-label">Gelar:</label>
                <input type="text" name="gelar" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="tanggal_lulus" class="form-label">Tanggal Lulus:</label>
                <input type="date" name="tanggal_lulus" class="form-control" required>
            </div>
            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Pangkat/Jabatan Pegawai</h5>
            </div>
            <div class="col-md-6">
                <label for="pangkat" class="form-label">Pangkat:</label>
                <input type="text" name="pangkat" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="golongan" class="form-label">Golongan:</label>
                <input type="text" name="golongan" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="TMT" class="form-label">TMT:</label>
                <input type="date" name="TMT" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>
            <div class="col-12 pb-4">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
@endsection
