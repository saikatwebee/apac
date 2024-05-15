
<nav class="menu-classic menu-fixed menu-transparent light align-right" data-menu-anima="fade-in">

    <div class="container">
        <div class="menu-brand">
            <a href="{{route('home_intro')}}">
                <img class="logo-default" src="media/logos/logo-1.jpg" alt="logo" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
                <li>
                    <a href="{{route('home_intro')}}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#">About us</a>
                    <ul>
                        <li><a href="{{ route('overview')}}">OVERVIEW</a></li>
                        <li><a href="{{ route('team')}}">TEAM</a></li>
                        <li><a href="{{ route('newsroom')}}">newsroom</a></li>
                        <li><a href="{{ route('founderdesk')}}">FROM THE FOUNDER'S DESK</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('products')}}">Products</a>
                    <!--<ul>-->
                    <!--    <li><a href="{{route('msme')}}">MSME Loans</a></li>-->
                    <!--    <li><a href="{{route('affordable')}}">Affordable Housing Loans</a></li>-->
                    <!--</ul>-->
                </li>
                <li>
                    <a href="{{route('we_are_hiring')}}">We’re Hiring!</a>
                </li>
                <li>
                    <a href="{{route('our_partners')}}">Investor Corner</a>
                </li>
                <!-- <li>
                    <a href="#">Our Presence</a>
                </li> -->
                <li>
                    <a href="{{ route('contact_us') }}">Contact us</a>
                    <!--<ul>-->
                    <!--    <li><a href="{{route('branch')}}">Branch Locator</a></li>-->
                    <!--    <li><a href="#">Head Office Address</a></li>-->
                    <!--</ul>-->
                </li>
                <li class="ten">
                    <a href="https://www.instagram.com/apacfin/" target="_blank"><i class="bi bi-instagram"></i></a>
                </li>
                <li class="ten">
                    <a href="https://www.facebook.com/Apacfinancial/" target="_blank"><i class="bi bi-facebook"></i></a>
                </li>
                <li class="ten">
                    <a href="https://www.linkedin.com/company/apac-financial-services " target="_blank"><i class="bi bi-linkedin"></i></a>
                </li>
                <li class="google-play-badge ten">
                    <a href="https://play.google.com/store/apps/details?id=com.apacfin.apacm" target="_blank" class="d-flex align-items-center playstore_ten"><img class="img-responsive"
                            src="media/logos/google-play-badge.png" alt="Get it on Google Play"></a>
                </li>
             <li class="telephone-badge">
                    <a class="link text-white" href="tel:1800313205205">
                        <i class="bi bi-telephone-fill"></i>
                        1800 313-205-205
                    </a>
                </li>
            </ul>
            <div class="d-none menu-right">
                <ul class="lan-menu">
                    <li>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- <header class="header-image ken-burn-center" data-parallax="true" data-natural-height="1080"
    data-natural-width="1920" data-bleed="0" data-image-src="media/hd-3.jpg" data-offset="0">
    <div class="container">
        <h1>@yield('mainheading')</h1>
    </div>
</header> --}}
<section class="section-assistants">
    <div class="assistants-container">


            <button class="btn btn-default py-2 emibtn"   onclick="javascript:window.open('https://customerportal.apacfin.in:8082/customerverification', '_blank');" 
            style="font-weight: 400;font-size: 18px;background-color:#f59c41;border-radius:3px;padding: 4px 8px !important;color:white;font-family: 'Montserrat', sans-serif;text-transform: capitalize;" formtarget="_blank">Pay EMI</button>

    </div>
</section>
