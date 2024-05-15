<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <script src="themekit/scripts/jquery.min.js"></script>
    <script src="themekit/scripts/main.js"></script>
    <link rel="stylesheet" href="themekit/css/bootstrap-grid.css">
    <link rel="stylesheet" href="themekit/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="themekit/css/style.css">
    <link rel="stylesheet" href="themekit/css/glide.css">
    <link rel="stylesheet" href="themekit/css/magnific-popup.css">
    <link rel="stylesheet" href="themekit/css/content-box.css">
    <link rel="stylesheet" href="themekit/css/contact-form.css">
    <link rel="stylesheet" href="themekit/css/media-box.css">
    <link rel="stylesheet" href="themekit/css/skin.css">
    <link rel="stylesheet" href="themekit/css/globals.css">
    <link rel="stylesheet" href="themekit/css/landing.css">
    <link rel="stylesheet" href="themekit/css/responsive.css">
    <link rel="stylesheet" href="media/font/bootstrap-icons.css">
    <link rel="stylesheet" href="themekit/css/circleprogress.css">
    <link rel="shortcut icon" href="{{ asset('media/logos/short-logo.png') }}">

    @yield('style')
    <style>
    @media (min-width: 1200px){
        .container {
            max-width: 1300px;
             /* max-width: 1380px !important; */
        }
    }
    li.active a {
            color: #F49D43 !important;
        }
        li a:hover {
            font-size: 15px !important;
            white-space: nowrap;
        }
.light .dropdown>ul>li:not(:hover)>a {
    color: #fff !important;
}
.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    /*background-color: #379cf4;*/
}
.light .dropdown>ul>li:not(:hover)>a {
    /*background: #3081c8 !important;*/
        color: orange !important;
}
    </style>
       <!-- Google tag (gtag.js) -->
       <script async src="https://www.googletagmanager.com/gtag/js?id=G-GLXH0HNH0N"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-GLXH0HNH0N');
    </script>
</head>

<body>

    @include('inc.frontendinc.header')
        <main>
            @yield('content')
        </main>
    @include('inc.frontendinc.footer')



    <link rel="stylesheet" href="themekit/media/icons/iconsmind/line-icons.min.css">
    <script src="themekit/scripts/parallax.min.js"></script>
    <script src="themekit/scripts/glide.min.js"></script>
    <script src="themekit/scripts/magnific-popup.min.js"></script>
    <script src="themekit/scripts/tab-accordion.js"></script>
    <script src="themekit/scripts/imagesloaded.min.js"></script>
    <script src="themekit/scripts/progress.js" async></script>
    <script src="themekit/scripts/custom.js" async></script>
    <script src="themekit/scripts/contact-form/contact-form.js" async></script>

    @yield('scripts')
<script>
  $('#mobilenumber1,#mobilenumber2,#mobilenumber3,#pincode1,#pincode2,#pincode3,#phone').keypress(function(event) {
    const isNumber =/^[0-9]+$/i.test(event.key);
    if(!isNumber){
        event.preventDefault();
    }
    return isNumber;
});
$('#fullname1,#fullname2,#fullname3,#name').keypress(function(e) {
    const isLetter = /^[a-zA-Z0 ]*$/i.test(e.key);
    if(!isLetter){
        e.preventDefault();
    }
    return isLetter;
});
</script>

</body>
</html>
