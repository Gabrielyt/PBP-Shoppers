<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="{{url('toko/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('toko/css/style.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css')}}">
      <!-- Table -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @yield('style')
  </head>
  <body>
    @include('toko/shoppers/partials/header')

    @yield('content')
    @include('toko/shoppers/partials/footer')
    <script src="{{url('toko/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('toko/js/jquery-ui.js')}}"></script>
    <script src="{{url('toko/js/popper.min.js')}}"></script>
    <script src="{{url('toko/js/bootstrap.min.js')}}"></script>
    <script src="{{url('toko/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('toko/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('toko/js/aos.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="{{url('toko/js/main.js')}}"></script>
    @yield('script')
  </body>
</html>
