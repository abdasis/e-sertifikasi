<div>
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                    class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                        data-toggle="dropdown">Geneva Kennedy</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user mr-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings mr-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock mr-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out mr-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title mt-2">Apps</li>

                    <li>
                        <a href="#sidebarEcommerce" data-toggle="collapse">
                            <i class="mdi mdi-database"></i>
                            <span> Data Master </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="ecommerce-dashboard.html">Data ISO</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sertifikat" data-toggle="collapse">
                            <i class="mdi mdi-file-document"></i>
                            <span> Sertifikasi </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sertifikat">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('sertifikasi.create') }}">Tambah Sertifikat</a>
                                </li>
                                <li>
                                    <a href="{{ route('sertifikasi.index') }}">Semua Sertifikat</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#pengaturan" data-toggle="collapse">
                            <i class="mdi mdi-cogs"></i>
                            <span> Pengaturan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="pengaturan">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="ecommerce-dashboard.html">General</a>
                                </li>
                                <li>
                                    <a href="ecommerce-dashboard.html">SEO</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
</div>
