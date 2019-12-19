<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{asset('images/logo.jpg')}}">
    <title>Blood Donor|Admin  @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @section('css')
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  @show
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
  <!-- Custom CSS -->
  {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <link href="{{ asset('css/stepwizard.css') }}" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Header -->
  @include('admin.includes.header')

  <!-- =============================================== -->

  <!-- Sidebar -->
  @include('admin.includes.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('admin.includes.footer')  

  
</div>
<!-- ./wrapper -->

@section('js')
<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
@show
<!-- AdminLTE App -->
<script src="{{ asset('js/app.min.js') }}"></script>
<script type="text/javascript">
  //To make link active
    $('li').each(function(){
        if(window.location.href.indexOf($(this).find('a:first').attr('href'))>-1)
        {
        $(this).addClass('active').siblings().removeClass('active');
        $(this).parent().parent('li').addClass('active').siblings().removeClass('active');
        }
    });
</script>
</body>
</html>
