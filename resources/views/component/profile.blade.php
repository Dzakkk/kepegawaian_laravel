@extends('layout.admin')

@section('profile')
    <div class="container-sm m-3 shadow">
        <div class="d-flex">
            <div>
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="profile">
            </div>
            <div>
                <h4 class="card-text">{{ $result->nama }}</h4>
                <p class="card-text">NIP: {{ $result->nip }}</p>
            </div>
        </div>
        <div>
            <p class="card-text">NIK: {{ $result->nik }}</p>
            <p class="card-text">Kartu Pegawai: {{ $result->kartu_pegawai }}</p>
            <div class="d-flex">
                <p class="card-text">Tempat Lahir: {{ $result->tempat_lahir }}</p>
                <p class="card-text">Tanggal Lahir: {{ $result->tanggal_lahir }}</p>
                <p class="card-text">Status Perkawinan: {{ $result->status_perkawinan }}</p>
            </div>
            <div class="d-flex">
                <p class="card-text">TMT KGB Terakhir: {{ $result->TMT_KGB_terakhir }}</p>
                <p class="card-text">Kenaikan KGB YAD: {{ $result->kenaikan_KGB_YAD }}</p>
                <p class="card-text">TMT Pensiun: {{ $result->TMT_pensiun }}</p>
            </div>
            <div class="d-flex">
                <p class="card-text">Pendidikan: {{ $result->didik->nama_pendidikan }}</p>
                <p class="card-text">Gelar: {{ $result->didik->gelar }}</p>
                <p class="card-text">Tanggal Lulus: {{ $result->didik->tanggal_lulus }}</p>
            </div>
            <div class="d-flex">
                <p class="card-text">Pangkat: {{ $result->jabat->pangkat }}</p>
                <p class="card-text">Golongan: {{ $result->jabat->golongan }}</p>
                <p class="card-text">TMT: {{ $result->jabat->TMT }}</p>
                <p class="card-text">Jabatan: {{ $result->jabat->jabatan }}</p>
            </div>

            <p class="card-text"><small
                    class="text-muted">{{ $result->created_at ? $result->created_at->format('Y-m-d') : 'N/A' }}</small></p>
        </div>
    </div>
@endsection
