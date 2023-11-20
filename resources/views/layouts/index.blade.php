@include('layouts.header')


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    @include('layouts.navbar-left')
    @include('layouts.navbar-right')
  </nav> 
  <!-- /.navbar -->
  
  @include('layouts.sidebar')
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @yield('content')
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

@include('layouts.footer')
