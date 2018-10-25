<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Admin Home Page</title>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <!-- Bootstrap -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('vendors/easypiechart/jquery.easy-pie-chart.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/styles.css')}}" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <![endif]-->
    <script src="{{asset('vendors/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    @yield('style')
</head>

<body>
@include('_includes.navigation.nav')
<div class="container-fluid">
    <div class="row-fluid" id="manage">
        @yield('sidebar')
        @yield('content')
    </div>
    <hr>
    <footer>
        <p class="text-center">&copy; Bryan mallare 2018</p>
    </footer>
</div>
<!--/.fluid-container-->
<script src="{{asset('vendors/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/easypiechart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('assets/scripts.js')}}"></script>

@yield('script')
</body>

</html>