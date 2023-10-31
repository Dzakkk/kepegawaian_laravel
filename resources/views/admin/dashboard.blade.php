@extends('layout.admin')

@section('jumlah')
    <div class="col-md-3 mt-3 shadow me-3">
        <a href="/admin/data" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah pegawai SMKN 1 CIMAHI</h5>
                    <h4 class="card-text">{{ $jumlah }}</h4>
                </div>
            </div>
        </a>
    </div>
@endsection

@section('laki')
<div class="col-md-3 mt-3 shadow me-3">
    <a href="/admin/lakilaki" class="text-decoration-none">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah pegawai laki laki</h5>
                <h4 class="card-text">{{ $boy }}</h4>
            </div>
        </div>
    </a>
</div>
@endsection

@section('perempuan')
<div class="col-md-3 mt-3 shadow me-3">
    <a href="/admin/perempuan" class="text-decoration-none">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah pegawai perempuan</h5>
                <h4 class="card-text">{{ $girl }}</h4>
            </div>
        </div>
    </a>
</div>
@endsection

@section('pensiun')
<div class="col-md-3 mt-3 shadow">
    <a href="/admin/pensiun" class="text-decoration-none">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Jumlah pensiun tahun ini</h5>
                <h4 class="card-text">{{ $pensiun }}</h4>
            </div>
        </div>
    </a>
</div>
@endsection