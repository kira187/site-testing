<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>
    
    {{-- Hojas de estilo --}}
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet"> 
    
    
    @section('css')
    @show
    @stack('css')

</head>

<body class="fixed-sidebar">

<div id="wrapper">

    {{-- Navbar --}}
    @include('layouts.navigation')

    <div id="page-wrapper" class="gray-bg">
        {{-- top-navbar --}}
        @include('layouts.top-navbar')    
        
        @include('layouts.page-heading')

        {{--  Main View  --}}
        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('content')        
        </div>

        {{--  footer  --}}        
        @include('layouts.footer')
    </div>
</div>

<!-- Mainly scripts -->
<script src="{!! asset( 'js/jquery-3.1.1.min.js') !!}"></script>
<script src="{!! asset( 'js/popper.min.js') !!}"></script>
<script src="{!! asset( 'js/bootstrap.min.js') !!}"></script>
<script src="{!! asset( 'js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
<script src="{!! asset( 'js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

<!-- Custom and plugin javascript -->
<script src="{!! asset( 'js/inspinia.js') !!}"></script>
<script src="{!! asset( 'js/plugins/pace/pace.min.js') !!}"></script>

@section('scripts')    
@show
@stack('scripts')

</body>
</html>
