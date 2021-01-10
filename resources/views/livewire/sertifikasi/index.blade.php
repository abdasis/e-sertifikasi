<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sertifikasi</a></li>
                        <li class="breadcrumb-item active">Semua</li>
                    </ol>
                </div>
                <h4 class="page-title">Semua Sertifikasi</h4>
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

                <div class="card-body">
                    <table class="table table-sm table-responsive">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Perusahaan</th>
                                <th>ID Sertifikasi</th>
                                <th>Standarisasi</th>
                                <th>Standarisasi</th>
                                <th>Surveilance 1</th>
                                <th>Surveilance 2</th>
                                <th>Expired Date</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sertifications as $key => $sertification)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td>{{ $sertification->perusahaan }}</td>
                                <td>{{ $sertification->id_sertifikasi }}</td>
                                <td>{{ $sertification->alamat }}</td>
                                <td>{{ $sertification->standard }}</td>
                                <td>{{ $sertification->surveilance_1 }}</td>
                                <td>{{ $sertification->surveilance_2 }}</td>
                                <td>{{ $sertification->expired }}</td>
                                <td>
                                    <div class="btn-group-justified">
                                        <a href="{{ route('sertifikasi.update', $sertification->id) }}">
                                            <button class="btn btn-sm btn-outline-warning"><i
                                                    class="fa fa-edit"></i></button>
                                        </a>
                                        {{-- <button class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></button> --}}
                                        <button wire:click='delete({{ $sertification->id }})'
                                            class="btn btn-sm btn-danger shadow-none"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $sertifications->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
