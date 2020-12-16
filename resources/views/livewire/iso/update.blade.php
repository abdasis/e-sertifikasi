<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ISO</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
                <h4 class="page-title">Tambah Jenis ISO</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Form Penambahan Sertifikat</h5>
                <div class="card-body">
                    <form wire:submit.prevent='update'>
                        <div class="form-group">
                            <label for="">Jenis ISO</label>
                            <input type="text" class="form-control shadow-none" wire:model='jenis_iso' placeholder="Masukan Nama Perusahaan">
                        </div>
                        <div class="form-group" wire:ignore>
                          <label for="diskripsi">Diskripsi ISO</label>
                          <textarea class="form-control shadow-none" wire:model="diskripsi" id="diskripsi" rows="3">{{ $diskripsi }}</textarea>
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
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        Livewire.on('alert', params => {
            Swal.fire(
                params['title'],
                params['message'],
                params['type']
            )
        })
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            height: 500,
            setup: function(editor){
                editor.on('keyup', function(e){
                    @this.set('diskripsi', tinymce.activeEditor.getContent())
                })
            }
        });
    </script>
@endpush
