<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('js/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  @yield('content')

  <script src="{{URL::asset('js/app.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{URL::asset('js/jquery-easing/jquery.easing.min.js')}}"></script>
  <!-- Custom -->
  <script type="text/javascript" src="{{URL::asset('js/sb-admin.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/sb-admin-charts.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/sb-admin-datatables.js')}}"></script>
</div>
</body>

</html>
