<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sertifikasi</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Sertifikasi</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Form Penambahan Sertifikat</h5>
                <div class="card-body">
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control shadow-none" wire:model='perusahaan'
                                placeholder="Masukan Nama Perusahaan">
                        </div>

                        <div class="form-group">
                            <label for="">ID Sertifikasi</label>
                            <input type="text" class="form-control shadow-none" wire:model='id_sertifikasi'
                                placeholder="Masukan Nama Perusahaan">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control shadow-none" wire:model='alamat'
                                placeholder="Masukan Nama Perusahaan">
                        </div>

                        <div class="form-group">
                            <label for="standard">Standard</label>
                            <select class="custom-select shadow-none" wire:model="standard" id="standard">
                                <option selected>Pilih Standard</option>
                                @foreach (App\Models\Menu::all() as $iso)
                                <option value="{{ $iso->nama }}">{{ $iso->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Submit</label>
                            <input type="text" class="form-control shadow-none" wire:model='submit'>
                        </div>

                        <div class="form-group">
                            <label for="">Surveilance 1</label>
                            <input type="text" class="form-control shadow-none" wire:model='surveilance_1'>
                        </div>

                        <div class="form-group">
                            <label for="">Surveilance 2</label>
                            <input type="text" class="form-control shadow-none" wire:model='surveilance_2'>
                        </div>

                        <div class="form-group">
                            <label for="expired">Date Expired</label>
                            <input type="date" name="expired" wire:model='date_expired' id="expired"
                                class="form-control shadow-none" placeholder="Masukan Tanggal Expire">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info font-weight-bolder shadow-none">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')
<script>
    Livewire.on('success', params => {
            Swal.fire(
                params['title'],
                params['message'],
                'success'
            )
        })
</script>
@endpush
