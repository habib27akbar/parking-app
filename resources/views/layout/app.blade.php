<!DOCTYPE html>
<html lang="en">

<style>
body {
  background-image: url('{{ url('/public/img/bg-parking.jpg') }}');
  background-repeat: no-repeat;
  background-position: center;
  width: 100%;
  -webkit-background-size: cover;
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parking App</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/public/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/public/dist/css/adminlte.min.css') }}">
</head>


    @yield('content')

        <!-- jQuery -->
        <script src="{{ url('/public/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('/public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('/public/dist/js/adminlte.min.js') }}"></script> 
          


</html>
