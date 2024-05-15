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
        img.img-fluid.logo-mobile{
            width: 50px !important;
        }
        .sidebar-mini .top-bar .navbar .navbar-header .logo-mobile{
            width: 61px !important;
            margin-left: 61px !important;
            /* margin-left: 75px; */
            
        }
        .top-bar .navbar .navbar-header .logo-mobile{
                /*margin-left: -63px;*/
                /*position: initial;*/
        }
        .top-bar .navbar .navbar-header .logo-desktop{
            /* width: 50px !important; */
        }
        .app-navbar .sidebar-nav ul.metismenu li a {
            padding: 1.9rem 1.6rem;
        }
        .app-navbar .sidebar-nav ul.metismenu li ul li a {
    padding: 1.6rem 2rem;
    padding-left: 3.78rem;
}
.app-navbar .sidebar-nav ul.metismenu li.active ul li.active a:before {
    width: 14px;
    height: 2px;
    position: absolute;
    content: '';
    left: 32px;
    background: #37394d;
    top: 31px;
}

button.btn.btn-secondary.buttons-copy,.buttons-excel,.buttons-csv,.buttons-pdf  {
    background: #6C757D !important;
}
.buttons-collection{
    display: none !important;

}
.buttons-pdf {
    border-top-right-radius: 3px !important;
    border-bottom-right-radius: 3px !important;

}
.note-color-select.btn{
    display: none;
}
.card-header.note-toolbar .note-color .dropdown-menu .note-palette .note-holder-custom .note-color-btn, .note-popover .popover-content .note-color .dropdown-menu .note-palette .note-holder-custom .note-color-btn {
    border: 1px solid #eee;
    display: none;
}
.card-header.note-toolbar .note-color .dropdown-menu .note-palette .note-color-row, .note-popover .popover-content .note-color .dropdown-menu .note-palette .note-color-row {
    height: 0px !important;
}

</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>

<body>
    <div class="app">
        <div class="app-wrap">
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('admin/assets/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>

            @include('inc.admin.header')

            <div class="app-container">

                @include('inc.admin.sidebar')

                <div class="app-main" id="main">

                @yield('content')

                </div>
            </div>

            @include('inc.admin.footer')

        </div>
    </div>

    <script src="{{ asset('admin/assets/js/vendors.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
        @yield('scripts')
<script>
    //phone validation and pinocde validation
  $('#branches,#states,#employees,#customers').keypress(function(event) {
    const isNumber =/^[0-9]+$/i.test(event.key);
    if(!isNumber){
        event.preventDefault();
    }
    return isNumber;
});
//alphabet validation
$('').keypress(function(e) {
    const isLetter = /^[a-zA-Z0 ]*$/i.test(e.key);
    if(!isLetter){
        e.preventDefault();
    }
    return isLetter;
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
</body>
</html>