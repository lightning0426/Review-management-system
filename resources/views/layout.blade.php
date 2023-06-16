<!DOCTYPE html>
<html>
<head>
    <title>保育園の口コミ評判サイト</title>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    </style>
    <title>@yield('title') | {{ config('app.name') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    {{-- <link rel="icon" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-16.ico" sizes="16x16" />
    <link rel="icon" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-32.ico" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-96.ico" sizes="96x96" />
    <link rel="icon" type="image/png" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-128.png" sizes="128x128" />
    <link rel="icon" type="image/png" href="https://hoikuhiroba-kuchikomi.com/assets/user/images/favicon/favicon-196.png" sizes="196x196" /> --}}

    <link rel="stylesheet" href="{{asset('assets/user/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}" />    
    {{-- <x-google-analytics /> --}}
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/user/js/common.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/user/js/flexibility.js')}}"></script>
    @include('frontend.includes.header')
    <main>
        @yield('content')
    </main>
    @include('frontend.includes.footer')
    {{-- <script type="text/javascript" src="{{asset('assets/user/js/jquery-3.4.1.min.js')}}"></script> --}}
</body>
</html>