<footer class="bg-dark footer">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="pr-lg-4">
                    <p class="text-white font-weight-bold">TENTANG KAMI</p>
                    <p class="text-white-50">Dengan didukung tenaga auditor profesional, Mutu Certification International berkomitmen untuk menyediakan jasa sertifikasi sistem manajemen mutu berdasarkan standar ISO 9001, ISO 14001, OHSAS 18001, ISO 27001:2013, ISO 22000:2005 secara tepat, akurat, independen, terpercaya, dan profesional.
                    </p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title font-weight-bold">JENIS SERTIFIKASI</p>
                    <ul class="list-unstyled">
                        @foreach (App\Models\Iso::latest()->get() as $iso)
                        <li><a href="{{ route('jenis-sertifikasi', $iso->slug) }}"><i class="mdi mdi-chevron-right mr-2"></i>{{ $iso->jenis_iso }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-list">
                    <p class="text-white mb-2 footer-list-title font-weight-bold">ALAMAT KAMI</p>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="mdi mdi-map-marker mr-2"></i>Taman Alamanda Blok Aa 1 No 53
                            Bekasi - INDONESIA</a></li>
                        <li><a href="#"><i class="mdi mdi-phone mr-2"></i>021 8265 4053</a></li>
                        <li><a href="#"><i class="mdi mdi-phone mr-2"></i>0812 8100 8374</a></li>
                        <li><a href="#"><i class="mdi mdi-whatsapp mr-2"></i>0812 8413 4025</a></li>
                        <li><a href="#"><i class="mdi mdi-email mr-2"></i>marketing@rmicertification.co.id</a></li>
                        <li><a href="#"><i class="mdi mdi-firefox mr-2"></i>rmicertification.co.id</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="float-left pull-none">
                    <p class="text-white-50">
                        Sertifikasi Manajemen ISO 9001, ISO 14001, OHSAS 18001, ISO 27001:2013, ISO 22000:2005
                    </p>
                </div>
                <div class="float-right pull-none">
                    <ul class="list-inline social-links">
                        <li class="list-inline-item text-white-50">
                            Social :
                        </li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100016588489016"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/rmicert_rmi"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/rmicertification/"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://plus.google.com/u/0/"><i class="mdi mdi-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</footer>
