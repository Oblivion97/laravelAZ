<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href=" {{ asset('test/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('test/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('test/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->


@include('layouts.navbar')

@yield('content')

@include('layouts.footer')



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src=" {{ asset('test/js/jquery-3.4.1.min.js') }} "></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src=" {{ asset('test/js/popper.min.js') }} "></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src=" {{ asset('test/js/bootstrap.min.js') }} "></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src=" {{ asset('test/js/mdb.min.js') }} "></script>
</body>

</html>
