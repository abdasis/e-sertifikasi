<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5 shadow-md shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">
                        FORM PENDAFTARAN SERTIFIKASI ISO
                    </h5>
                    <div class="card-body">
                        <form wire:submit.prevent='store'>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="standar_sertifikasi">Pilih Standar Sertifikasi</label>
                                    <select class="custom-select" wire:model="standar_sertifikasi" id="standar_sertifikasi">
                                        <option selected>Pilih Standar</option>
                                        @foreach (App\Models\Iso::latest()->get() as $iso)
                                            <option value="{{ $iso->jenis_iso }}">{{ $iso->nama_iso }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="standar_sertifikasi">Status Sertifikasi</label>
                                    <select class="custom-select" wire:model="status_permohonan" id="standar_sertifikasi">
                                        <option selected>Pilih Status</option>
                                        <option value="ISO 9001">Sertifikasi Baru</option>
                                        <option value="14001">Sertifikasi Ulang</option>
                                        <option value="">Sertifikasi Perpanjangan</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Biodata Perusahaan</h4>
                            <div class="form-group">
                              <label for="nama_perusahaan">Nama Perusahaan</label>
                              <input type="text" wire:model="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Masukan Nama Perusahaan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="alamat_perusahaan">Alamat Perusahaan</label>
                              <textarea class="form-control" wire:model="alamat_perusahaan" id="alamat_perusahaan" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" wire:model="telepon" id="telepon" class="form-control" placeholder="Masukan Nama Perusahaan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" wire:model="email" id="email" class="form-control" placeholder="Masukan Nama Perusahaan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_karyawan">Jumlah Karyawan</label>
                                <input type="number" wire:model="jumlah_karyawan" id="jumlah_karyawan" class="form-control" placeholder="Jumlah Karyawan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_sift">Jumlah Sift</label>
                                <input type="number" wire:model="jumlah_sift" id="jumlah_sift" class="form-control" placeholder="Jumlah Sift" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_divisi">Jumlah Divisi</label>
                                <input type="number" wire:model="jumlah_divisi" id="jumlah_divisi" class="form-control" placeholder="Jumlah Divisi" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="ruang_lingkup">Ruang Lingkup</label>
                                <textarea class="form-control" wire:model="ruang_lingkup" id="ruang_lingkup" rows="3"></textarea>
                              </div>

                              <h4>Biodata Perwakilan</h4>
                            <div class="form-group">
                                <label for="nama_perwakilan">Nama Perawakilan</label>
                                <input type="text" wire:model="nama_perwakilan" id="nama_perwakilan" class="form-control" placeholder="Masukan Nama Perwakilan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" wire:model="jabatan" id="jabatan" class="form-control" placeholder="Masukan Nama Perwakilan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="telepon_perwakilan">Telepon</label>
                                <input type="text" wire:model="telepon_perwakilan" id="telepon_perwakilan" class="form-control" placeholder="Masukan Telepon Perwakilan" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="email_perwakilan">Email/Website</label>
                                <input type="email" wire:model="email_perwakilan" id="email_perwakilan" class="form-control" placeholder="Masukan Email Perwakilan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="bidang_usaha">Bidang Usaha</label>
                                <input type="text" wire:model="bidang_usaha" id="bidang_usaha" class="form-control" placeholder="Masukan Nama Perwakilan" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary font-weight-bold">DAFTAR SEKARANG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('banner')
    <section class="bg-home bg-gradient" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="home-title mo-mb-20">
                                <h1 class="mb-4 text-white">Lembaga Sertifikasi Online</h1>
                                <p class="text-white-50 home-desc mb-5">Simpan dan Cetak Online </p>
                                <div class="subscribe">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary">Subscribe Us</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                            <div class="home-img position-relative">
                                <img src="images/home-img.png" alt="" class="home-first-img">
                                <img src="images/home-img.png" alt="" class="home-second-img mx-auto d-block">
                                <img src="images/home-img.png" alt="" class="home-third-img">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
        </div>
    </section>
@endpush

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
