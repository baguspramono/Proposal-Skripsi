<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>NOTIF</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('beranda')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Beranda
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <p>
                            Tabel Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('data-member')}}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-barang')}}" class="nav-link">
                                <i class="fas fa-boxes nav-icon"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-cabang')}}" class="nav-link">
                                <i class="far fa-building nav-icon"></i>
                                <p>Cabang</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <p>
                            Tabel Pengiriman
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('data-kurir')}}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Kurir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-mobil')}}" class="nav-link">
                                <i class="fas fa-truck nav-icon"></i>
                                <p>Mobil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-expedisi')}}" class="nav-link">
                                <i class="fas fa-barcode nav-icon"></i>
                                <p>Expedisi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-jalur')}}" class="nav-link">
                                <i class="fas fa-road nav-icon"></i>
                                <p>Jalur Pengiriman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('data-service')}}" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Service</p>
                            </a>
                        </li>
                    </ul>
                    {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>