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
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Expedisi</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{route('create-expedisi')}}" class="btn btn-success">Tambah Data <i
                                class="fas fa-plus-square"></i></a>

                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>No.Resi</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($dtExpedisi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->kode }}</td>
                            <td>
                                <a href="{{ url('edit-expedisi', $item->id) }}"><i class="fas fa-edit"></i></a> | <a
                                    href="{{ url('delete-expedisi', $item->id) }}"><i class="fas fa-trash-alt"
                                        style="color :red"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
                <div class="card-footer">
                    {{ $dtExpedisi->Links() }}
                </div>
            </div>
        </div>
    </div>
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
    @include('sweetalert::alert')
</body>

</html>