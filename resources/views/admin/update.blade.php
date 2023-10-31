@extends('layout.admin')

@section('update')
    <div class="container shadow pt-2 mt-2" style="width: 800px">

        <form action="/admin/update/{{ $user->nik }}" class="row g-3 d-flex" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @csrf
            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Biodata Pegawai</h5>
            </div>
            <div class="col-md-12">
                <label for="inputAddress" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="inputAddress" value="{{ $user->nama }}">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="inputAddress2" value="{{ $user->nik }}">
            </div>
            <div class="col-md-6">
                <label for="inputAddress2" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="inputAddress2" value="{{ $user->nip }}">
            </div>
            <div class="col-md-6">
                <label for="status_perkawinan" class="form-label">Status Perkawinan</label>
                <input type="text" name="status_perkawinan" class="form-control" required
                    value="{{ $user->status_perkawinan }}">
            </div>
            <div class="col-md-6">
                <label for="kartu_pegawai" class="form-label">Kartu Pegawai</label>
                <input type="text" name="kartu_pegawai" class="form-control" required value="{{ $user->kartu_pegawai }}">
            </div>

            <div class="col-md-4">
                <label for="inputAddress2" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="inputAddress2"
                    value="{{ $user->tempat_lahir }}">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="inputCity"
                    value="{{ $user->tanggal_lahir }}">
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
                <input type="date" name="TMT_KGB_terakhir" class="form-control" required
                    value="{{ $user->TMT_KGB_terakhir }}">
            </div>
            <div class="col-md-4">
                <label for="kenaikan_KGB_YAD" class="form-label">Kenaikan KGB YAD:</label>
                <input type="date" name="kenaikan_KGB_YAD" class="form-control" required
                    value="{{ $user->kenaikan_KGB_YAD }}">
            </div>
            <div class="col-md-4">
                <label for="TMT_pensiun" class="form-label">TMT Pensiun:</label>
                <input type="date" name="TMT_pensiun" class="form-control" required value="{{ $user->TMT_pensiun }}">
            </div>

            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Pendidikan Pegawai</h5>
            </div>

            <div class="col-md-12">
                <label for="nama_pendidikan" class="form-label">Nama Pendidikan:</label>
                <input type="text" name="nama_pendidikan" class="form-control" required
                    value="{{ $user->didik->nama_pendidikan }}">
            </div>
            <div class="col-md-6">
                <label for="gelar" class="form-label">Gelar:</label>
                <input type="text" name="gelar" class="form-control" required value="{{ $user->didik->gelar }}">
            </div>
            <div class="col-md-6">
                <label for="tanggal_lulus" class="form-label">Tanggal Lulus:</label>
                <input type="date" name="tanggal_lulus" class="form-control" required
                    value="{{ $user->didik->tanggal_lulus }}">
            </div>
            <div class="col-md-12">
                <h5 for="nama_pendidikan" class="form-h5">Pangkat/Jabatan Pegawai</h5>
            </div>
            <div class="col-md-6">
                <label for="pangkat" class="form-label">Pangkat:</label>
                <input type="text" name="pangkat" class="form-control" required value="{{ $user->jabat->pangkat }}">
            </div>
            <div class="col-md-6">
                <label for="golongan" class="form-label">Golongan:</label>
                <input type="text" name="golongan" class="form-control" required
                    value="{{ $user->jabat->golongan }}">
            </div>
            <div class="col-md-6">
                <label for="TMT" class="form-label">TMT:</label>
                <input type="date" name="TMT" class="form-control" required value="{{ $user->jabat->TMT }}">
            </div>
            <div class="col-md-6">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required value="{{ $user->jabat->jabatan }}">
            </div>
            <div class="col-12 pb-4">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
@endsection
