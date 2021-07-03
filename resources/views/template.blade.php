<!DOCTYPE html>
<html lang="en">

<head>
    @include('_partial.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper"> 
        {{-- main-header navbar --}}
        @include('_partial.nav-header')

        <!-- Main Sidebar Container -->
        @include('_partial.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) / breadcrumb -->
            @include('_partial/breadcrumb')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                   {{-- @yield('content') --}}
                   @include('konten.konten')
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        {{-- jangan diilangin dulu --}}
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
           @include('_partial.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
   @include('_partial/script')
</body>

</html>
