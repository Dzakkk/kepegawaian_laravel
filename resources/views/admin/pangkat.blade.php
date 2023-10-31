@extends('layout.admin')

@section('didikjabat')
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
        <div class="m-3 ">
            <a href="/admin/data" class="btn btn-outline-primary h-100">back</a>
        </div>
    <?php
    $row = 1;
    ?>
    <table class="table table-hover shadow mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">NAMA</th>
                <th scope="col">PENDIDIKAN</th>
                <th scope="col">GELAR</th>
                <th scope="col">TANGGAL LULUS</th>
                <th scope="col">PANGKAT</th>
                <th scope="col">GOLONGAN</th>
                <th scope="col">TMT</th>
                <th scope="col">JABATAN</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th scope="row">{{ $row }}</th>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->didik->nama_pendidikan }}</td>
                    <td>{{ $item->didik->gelar }}</td>
                    <td>{{ $item->didik->tanggal_lulus }}</td>
                    <td>{{ $item->jabat->pangkat }}</td>
                    <td>{{ $item->jabat->golongan }}</td>
                    <td>{{ $item->jabat->TMT }}</td>
                    <td>{{ $item->jabat->jabatan }}</td>
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
@endsection
