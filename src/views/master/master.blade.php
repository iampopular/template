<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('vendor.template.master.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('vendor.template.master.header')
    @yield('content')
    @include('vendor.template.master.footer')
</div>
<!-- ./wrapper -->
@include('vendor.template.master.foot')
</body>
</html>
