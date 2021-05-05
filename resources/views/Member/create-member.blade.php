<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Create Data Member</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{route('simpan-member')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Masukkan Nama Member" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="hp" id="hp" class="form-control"
                                    placeholder="Masukkan Nomor Hp" required>
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                                <a href="{{route('data-member')}}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('layouts.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('layouts.script')
</body>

</html>