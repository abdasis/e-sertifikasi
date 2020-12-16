<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card my-5 shadow-md shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">
                        Validasi Sertifikat
                    </h5>
                    <div class="card-body">
                        <form wire:submit.prevent='validasiSertifikasi'>
                            <div class="form-group">
                              <label for="">Company Name</label>
                              <input type="text" name="" wire:model='nama_perusahaan' id="" class="form-control" placeholder="Company Name" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="certificate_number">Certifikate Number</label>
                              <input type="text" name="certificate_number" wire:model='certificate_number' id="certificate_number" class="form-control" placeholder="Certificate Number" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if (!empty($sertifikat))
            <div class="col-md-7">
                <div class="card my-5 shadow-md shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">Detail Sertifikasi</h5>
                    <div class="card-body">

                        <table class="table table-sm table-responsive">
                            <tbody>
                                <tr>
                                    <td scope="row">Perusahaan</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->perusahaan }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">ID Sertifikasi</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->id_sertifikasi }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Alamat</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->alamat }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Standard</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->standard }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Submit</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->submit }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Surveilance 1</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->surveilance_1 }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Surveilance 2</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->surveilance_2 }}</td>
                                </tr>

                                <tr>
                                    <td scope="row">Expired</td>
                                    <td>:</td>
                                    <td>{{ $sertifikat->expired }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
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
