<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'APAC') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.ico') }}">-->
            <link rel="shortcut icon" href="{{ asset('media/logos/short-logo.png') }}">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}" />
    <style>
    .col-sm-6.col-xxl-9.col-lg-7.bg-gradient.o-hidden.order-1.order-sm-2 {
    background: linear-gradient(to right,#1A2E59 0,#1A2E59 100%)!important;
}
</style>
</head>

<body class="bg-white">
    <div class="app">
        <div class="app-wrap">
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('admin/assets/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>

            <div class="app-contant">

            @yield('content')

            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/vendors.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
</body>

</html>