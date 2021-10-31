<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- Style --}}
    @include('includes.style')

    @stack('style')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('assets/dist/img/logo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('includes.navbar')

  <!-- Main Sidebar Container -->
  @include('includes.sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">

        {{-- Title Page --}}
        <h1 class="m-0">@yield('title page')</h1>

      </div>
    </div>

    <!-- Content -->
    @yield('content')

  </div>
  
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  <!-- Footer -->
  @include('includes.footer')
  
</div>

    {{-- Script --}}
    @include('includes.script')

    @stack('scripts')

</body>
</html>
