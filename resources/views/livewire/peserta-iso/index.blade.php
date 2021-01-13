<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Peserta</a></li>
                        <li class="breadcrumb-item active">Semua Peserta</li>
                    </ol>
                </div>
                <h4 class="page-title">Semua Peserta</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">
                    Tampilan Seluruh Sertifikasi
                </h5>

                <table class="table table-sm table-hover table-nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Standar Sertifikasi</th>
                            <th>Status Permohonan</th>
                            <th>Nama Perusahaan</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPeserta as $key => $peserta)
                        <tr>
                            <td scope="row">{{ $key+1 }}</td>
                            <td class="text-wrap">{{ $peserta->standar_sertifikasi }}</td>
                            <td>{{ $peserta->status_permohonan }}</td>
                            <td>{{ $peserta->nama_perusahaan }}</td>
                            <td>{{ $peserta->telepon }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>
                                <div class="btn-group-justified">
                                    <a href="{{ route('sertifikasi.update', $peserta->id) }}">
                                        <button class="btn btn-sm btn-outline-warning"><i
                                                class="fa fa-edit"></i></button>
                                    </a>
                                    <button wire:click='show({{ $peserta->id }})' class="btn btn-sm btn-outline-info"><i
                                            class="fa fa-eye"></i></button>
                                    <button wire:click='delete({{ $peserta->id }})'
                                        class="btn btn-sm btn-danger shadow-none"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $dataPeserta->links() }}
                </div>

            </div>
        </div>
    </div>

    {{-- modal  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
