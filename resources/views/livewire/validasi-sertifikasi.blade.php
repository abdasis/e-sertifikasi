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
                                <input type="text" name="" wire:model='nama_perusahaan' id="" class="form-control"
                                    placeholder="Company Name" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="certificate_number">Certifikate Number</label>
                                <input type="text" name="certificate_number" wire:model='certificate_number'
                                    id="certificate_number" class="form-control" placeholder="Certificate Number"
                                    aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if (!empty($dataSertifikat))
            <div class="col-md-7">
                @foreach ($dataSertifikat as $sertifikat)
                <div class="card my-5 shadow-md shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">Detail Sertifikasi</h5>
                    <table class="table card-body table-sm">
                        <tbody>
                            <tr>
                                <td class="text-nowrap" scope="row">Perusahaan</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->perusahaan }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">ID Sertifikasi</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->id_sertifikasi }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">Alamat</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">Standard</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->standard }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">Submit</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->submit }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">Surveilance 1</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->surveilance_1 }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap" scope="row">Surveilance 2</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->surveilance_2 }}</td>
                            </tr>

                            <tr>
                                <td class="text-nowrap" scope="row">Expired</td>
                                <td class="">:</td>
                                <td class="">{{ $sertifikat->expired }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>


@push('banner')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-110469.jpeg') }}"
                alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-110469.jpeg') }}"
                alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-187041(1).jpeg') }}"
                alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endpush
