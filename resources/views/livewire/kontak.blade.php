<div>
    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="col-md-9">
                <div class="card my-5 shadow-sm shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">
                        Form Contact
                    </h5>
                    <div class="card-body">
                        <form >
                            <div class="form-group">
                              <label for="">Nama Anda</label>
                              <input type="text" name="" id="" class="form-control" placeholder="Company Name" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="certificate_number">Email Anda</label>
                              <input type="text" name="certificate_number" id="certificate_number" class="form-control" placeholder="Certificate Number" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="certificate_number">Subject Anda</label>
                                <input type="text" name="certificate_number" id="certificate_number" class="form-control" placeholder="Certificate Number" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="pesan_anda">Pesan Anda</label>
                              <textarea class="form-control" name="pesan_anda" id="pesan_anda" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Hubungi Sekarang</button>
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
