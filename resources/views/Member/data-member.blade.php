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
                        <h1 class="m-0"><i class="fas fa-user-alt"></i> Member</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{route('create-member')}}" class="btn btn-success">Tambah Data <i
                                class="fas fa-plus-square"></i></a>

                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                aria-controls="home" aria-selected="true">Tabel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Hp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($dtMember as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->hp }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="{{ url('edit-member', $item->id) }}"><i
                                                    class="fas fa-edit"></i></a> | <a
                                                href="{{ url('delete-member', $item->id) }}"><i class="fas fa-trash-alt"
                                                    style="color :red"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                            <div class="card-footer">
                                {{ $dtMember->Links() }}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                            Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est
                            lobortis quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin
                            quis iaculis tellus. Etiam ac vehicula eros, pharetra consectetur dui.
                        </div>
                        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                            Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula
                            massa, gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem
                            interdum molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor.
                        </div>
                    </div>
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