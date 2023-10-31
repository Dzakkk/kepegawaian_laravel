@extends('layout.admin')

@section('dashboard')
    {{-- <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text">NIK: {{ $item->nik }}</p>
                <p class="card-text">Nama: {{ $item->nama }}</p>

                <p class="card-text">NIP: {{ $item->nip }}</p>

                <p class="card-text">Tempat Lahir: {{ $item->tempat_lahir }}</p>
                <p class="card-text">Tanggal Lahir: {{ $item->tanggal_lahir }}</p>
                <p class="card-text">Status Perkawinan: {{ $item->status_perkawinan }}</p>

                <p class="card-text">Kartu Pegawai: {{ $item->kartu_pegawai }}</p>

                <p class="card-text">TMT KGB Terakhir: {{ $item->TMT_KGB_terakhir }}</p>
                <p class="card-text">Kenaikan KGB YAD: {{ $item->kenaikan_KGB_YAD }}</p>
                <p class="card-text">TMT Pensiun: {{ $item->TMT_pensiun }}</p>

                <p class="card-text">Pendidikan: {{ $item->didik->nama_pendidikan }}</p>
                <p class="card-text">Gelar: {{ $item->didik->gelar }}</p>
                <p class="card-text">Tanggal Lulus: {{ $item->didik->tanggal_lulus }}</p>

                <p class="card-text">Pangkat: {{ $item->jabat->pangkat }}</p>
                <p class="card-text">Golongan: {{ $item->jabat->golongan }}</p>
                <p class="card-text">TMT: {{ $item->jabat->TMT }}</p>
                <p class="card-text">Jabatan: {{ $item->jabat->jabatan }}</p>

                <p class="card-text"><small class="text-muted">{{ $item->created_at ? $item->created_at->format('Y-m-d') : 'N/A' }}</small></p>

                <a href="/admin/update/{{ $item->nik }}" class="btn btn-outline-primary">Ubah</a>

                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#confirmDeleteModal-{{ $item->nik }}">Delete</button>

                <div class="modal fade" id="confirmDeleteModal-{{ $item->nik }}" tabindex="-1"
                    aria-labelledby="confirmDeleteModalLabel-{{ $item->nik }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->nik }}">Confirm Deletion
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this record?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                <form action="{{ route('delete', $item->nik) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

    <?php
    $row = 1;
    ?>
    <table class="table table-hover shadow mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">NAMA</th>
                <th scope="col">NIP</th>
                <th scope="col">L/P</th>
                <th scope="col">TEMPAT LAHIR</th>
                <th scope="col">TANGGAL LAHIR</th>
                <th scope="col">STATUS PERKAWINAN</th>
                <th scope="col">KARTU PEGAWAI</th>
                <th scope="col">TMT KGB TERAKHIR</th>
                <th scope="col">KENAIKAN KGB YAD</th>
                <th scope="col">PENSIUN</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th scope="row">{{ $row }}</th>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->status_perkawinan }}</td>
                    <td>{{ $item->kartu_pegawai }}</td>
                    <td>{{ $item->TMT_KGB_terakhir }}</td>
                    <td>{{ $item->kenaikan_KGB_YAD }}</td>
                    <td>{{ $item->TMT_pensiun }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="/admin/update/{{ $item->nik }}" class="btn btn-outline-primary btn-sm me-1">Ubah</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $item->nik }}">Delete</button>
                        </div>
                    </td>
                </tr>
                <?php
                $row++;
                ?>
                <div class="modal fade" id="confirmDeleteModal-{{ $item->nik }}" tabindex="-1"
                    aria-labelledby="confirmDeleteModalLabel-{{ $item->nik }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $item->nik }}">Confirm Deletion
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this record?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                <form action="{{ route('delete', $item->nik) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <div class="m-3 ">
        <a href="/admin/didikjabat" class="btn btn-outline-primary h-100">more</a>
    </div>
@endsection
