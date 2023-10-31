@extends('layout.pegawai')

@section('pegawai')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        @if ($user)
            <p class="card-text">NIK: {{ $user->nik }}</p>
            <p class="card-text">Nama: {{ $user->nama }}</p>

            <p class="card-text">NIP: {{ $user->nip }}</p>

            <p class="card-text">Tempat Lahir: {{ $user->tempat_lahir }}</p>
            <p class="card-text">Tanggal Lahir: {{ $user->tanggal_lahir }}</p>
            <p class="card-text">Status Perkawinan: {{ $user->status_perkawinan }}</p>

            <p class="card-text">Kartu Pegawai: {{ $user->kartu_pegawai }}</p>

            <p class="card-text">TMT KGB Terakhir: {{ $user->TMT_KGB_terakhir }}</p>
            <p class="card-text">Kenaikan KGB YAD: {{ $user->kenaikan_KGB_YAD }}</p>
            <p class="card-text">TMT Pensiun: {{ $user->TMT_pensiun }}</p>

            @if ($user->didik)
                <p class="card-text">Pendidikan: {{ $user->didik->nama_pendidikan }}</p>
                <p class="card-text">Gelar: {{ $user->didik->gelar }}</p>
                <p class="card-text">Tanggal Lulus: {{ $user->didik->tanggal_lulus }}</p>
            @endif

            @if ($user->jabat)
                <p class="card-text">Pangkat: {{ $user->jabat->pangkat }}</p>
                <p class="card-text">Golongan: {{ $user->jabat->golongan }}</p>
                <p class="card-text">TMT: {{ $user->jabat->TMT }}</p>
                <p class="card-text">Jabatan: {{ $user->jabat->jabatan }}</p>
            @endif

            <p class="card-text"><small
                class="text-muted">{{ $user->created_at ? $user->created_at->format('Y-m-d') : 'N/A' }}</small></p>
        @else
            <p class="card-text">Data profil pengguna tidak tersedia.</p>
        @endif
    </div>
</div>

@endsection
