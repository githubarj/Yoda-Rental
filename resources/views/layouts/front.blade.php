<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
         @yield(' title ')
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ ('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ ('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    
    <link href="{{ ('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ ('frontend/css/owl.theme.min.css') }}" rel="stylesheet">

</head>
<body>
    @include('layouts.inc.frontnavbar')
        
            <div class="content">
                @yield('content')
 
            </div>
 
        <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>      
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" ></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" ></script>

        @yield('scripts')
        
</body>
</html>
