<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
                <h4 class="page-title">Semua Menu</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Form Penambahan Sertifikat</h5>
                <div class="card-body">
                    @if ($statusUpdate)
                    <form wire:submit.prevent='update'>
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" class="form-control shadow-none" wire:model='nama' placeholder="Masukan Nama Menu">
                        </div>
                        <div class="form-group" wire:ignore>
                          <label for="diskripsi">Link</label>
                          <input type="text" class="form-control shadow-none" wire:model='link' placeholder="Masukan Link">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info font-weight-bolder shadow-none">SIMPAN</button>
                        </div>
                    </form>
                    @else
                    <form wire:submit.prevent='store'>
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" class="form-control shadow-none" wire:model='nama' placeholder="Masukan Nama Menu">
                        </div>
                        <div class="form-group" wire:ignore>
                          <label for="diskripsi">Link</label>
                          <input type="text" class="form-control shadow-none" wire:model='link' placeholder="Masukan Link">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info font-weight-bolder shadow-none">SIMPAN</button>
                        </div>
                    </form>
                    @endif
                </div>

                <hr>

                <div class="card-body">
                    <div class="alert alert-info">Link silahkan bisa salin dari data dibawah ini</div>
                </div>
                <ul>
                    @foreach ($isos as $iso)
                    <li>{{ $iso->nama_iso }} | <code>{{ url('/') }}/{{ $iso->slug }}</code></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Daftar Halaman Aktif</h5>
                <table class="card-body table-sm">
                    <thead class="bg-light">
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $key => $menu)
                        <tr>
                            <td class="text-center">{{ $key+1 }}</td>
                            <td>{{ $menu->nama }}</td>
                            <td>{{ $menu->link }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning" wire:click='edit({{ $menu->id }})'><i class="fa fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click='delete({{ $menu->id }})'><i class="fa fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
