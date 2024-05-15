@extends('layouts.frontendapp')
@section('title', "Founder's desk")

@section('style')
<style>
 .lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 70%,rgba(0,0,0,0) 100%);
}

/*.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide_bullets > button:hover, .glidebullets > button.glidebullet--active, .controls-right .glidebullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glidearrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide_arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {*/
/*    background: #cfcfcf;*/
/*}*/

.mt-0 {
    margin-top: 0 !important;
    /*margin-bottom: 20px;*/
}

</style>
@endsection

@section('mainheading', "Founder's desk")
@section('content')
<section class="section-af-bg" style="background: url(media/icons/use-svg-as-background-image-particle-strokes.svg)">
    <div class="container">
        <div class="row founder">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 d-flex">
                <div class="profile-image img-container mx-auto px-4"style="padding-top: 4.5rem !important;
    padding-left: 0.5rem !important;
    padding-right: 0.5rem !important;">
                    <img src="media/founder/founder_dec30.jpg" alt="" class="img-responsive">

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <h1 class="profile-image2 text-white text-uppercase mb-4 headingcentered foundersdesk_headingcentered">FROM THE FOUNDER’S DESK</h1>
                <p class="mt-0 mb-12"  style="font-size: 16px;line-height:2rem;text-align:justify;">
                    {{-- After 3 decades of working in local & global banks, one had strong conviction about one market that is sizeable and yet clearly under-served: micro & small enterprises in semi-rural & semi-urban markets. I founded APAC Financial in 2018 with the focused goal of building a specialised MSME lending platform that delivers credit to underbanked businesses in India. These are the 70 million businesses that are the backbone of our country – they account for 30%+ of India’s GDP and employ 100+ million people – but remain underserved. There is a Rs. 80 trillion MSME credit gap in India, which grows year on year – this is the size of APAC’s opportunity. APAC exists because we believe that all deserving micro & small businesses should focus on growth instead of being constrained by access to capital. --}}
                    {!!$apac_foundersdesk->descr!!}
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="profile-card-2 mt-0 mb-12"  style="font-size: 16px;line-height:1.5rem;
    text-align: justify;margin-bottom:0px;">
                     {!!$apac_foundersdesk->descr1!!}
                 </p>

            </div>
             <div class="section1 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: left;">
                <p>Gunit Chadha</p>
                <p style="font-weight: 900">Founder & Managing Director

                </p>

            </div>
        </div>
    </div>

</section>
<section class="section-base">
    <div class="container py-4">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-center text-uppercase text-theme-primary fs-2">Think MSME, Think APAC</h1>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script>
    window.onload = function(){
        $dem = $('#main-menu li.dropdown ul li').hasClass('active');
        if($dem == true){
            $temp = $('#main-menu li.dropdown ul').parent().addClass('active');
        }
    }
    </script>
@endsection

