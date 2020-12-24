<div>
    <div class="container-fluid">
        <div class="row justify-content-center my-5">
            <div class="col-md-12">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="col-md-9">
                <div class="card my-5 shadow-md shadow-outline-teal">
                    <h5 class="card-header bg-white border-bottom">
                        Form Contact
                    </h5>
                    <div class="card-body">
                        <form wire:submit.prevent='send'>
                            <div class="form-group">
                              <label for="">Nama Anda</label>
                              <input type="text" wire:model='nama' id="" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="certificate_number">Email Anda</label>
                              <input type="text" wire:model="email" id="certificate_number" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="certificate_number">Subject Anda</label>
                                <input type="text" wire:model="subject" id="certificate_number" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                              <label for="pesan_anda">Pesan Anda</label>
                              <textarea class="form-control" wire:model="isi_pesan" id="pesan_anda" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary font-weight-bold">Hubungi Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
        <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-110469.jpeg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-110469.jpeg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-187041(1).jpeg') }}" alt="Third slide">
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
