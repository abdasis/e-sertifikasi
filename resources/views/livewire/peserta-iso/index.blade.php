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
    <div class="modal fade" id="modalPeserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('peserta-iso.show')
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    Livewire.on('modalPeserta', function(){
        $('#modalPeserta').modal('show')
    })
</script>
@endpush
