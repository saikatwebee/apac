

@extends('layouts.frontendapp')
@section('title', 'APAC')
@section('style')
<link rel="stylesheet" href="themekit/css/home-emi-design.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
<!--<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">-->

    <style>
    #loan-amount,#interest-rate,#loan-period:hover {
    cursor: pointer;
}
    ::-webkit-input-placeholder { /* Chrome */
 font-family: 'Montserrat', sans-serif;
/*color: white;*/
font-size: 16px;
}




.apac_at_glance {
    font-size: 16px;
    line-height: 1.8 !important;
    word-spacing: 4px !important;
    text-align: justify;
}



header{
    display: none !important;
}
.datapoints{
    padding-bottom: 20px;
    position: relative;
    /* top: -80px; */
}





  #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -140px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

#carousel .shadow {
  -moz-box-shadow: 0px 16px 26px #888888;
  -webkit-box-shadow: 0px 16px 26px #888888;
  box-shadow: 0px 16px 26px #888888;
}

#carousel .slide {
  position: absolute;
  overflow: hidden;
}

#carousel .slide a:hover img {
  margin-top: 2px;
}

#carousel .slide img {
  width:  100%;
  height: 100%;
}

#carousel .slide p {
  position: relative;
  padding: 0;
  margin:  0;
  height:  100%
}

#carousel .slide span {
  background-color: #000;
  color: #fff;
  font-size: 0.8em;
  font-family: sans-serif;
  position: absolute;
  padding: 5px;
  width: 100%;
  bottom: 0;
  z-index: 99;
}

#carousel .navigate-left {
  cursor: pointer;
  position: absolute;
  bottom: 10px;
  left: 220px;
}

#carousel .navigate-right {
  cursor: pointer;
  position: absolute;
  bottom: 10px;
  /* right: 484px; */
}







        .lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 70%,rgba(0,0,0,0) 100%);
}




  .getme{
        position: relative;
        top: 180px;
        left: 150px;

  }
  .banner-title{
      font-size: 40px;
      top: 410px;
      width: 40%;
  }
  .banner-title h1{
    word-wrap: break-word;
  }


  @media only screen and (min-width:321px) and (max-width: 575px) {

.getme{
    position: relative;
    top: -70px;
    left: 0px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:606px;
     width: 100%;
 }
}
@media only screen and (min-width:576px) and (max-width: 666px) {

.getme{
    position: relative;
    top: 180px;
    left: 200px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:490px;
     right: 45px;
     width: 50%;
 }

}
@media only screen and (min-width:667px) and (max-width: 767px) {

.getme{
    position: relative;
    top: 180px;
    left: 262px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:490px;
     right: 27px;
     width: 50%;
 }
}

 @media only screen and (min-width:576px) and (max-width: 767px){
    .benfitssme {
    flex: 0 0 100%;
    max-width: 100%;

}


}
@media only screen and (min-width:520px) and (max-width: 575px){
    .mb-sm-3 {
    margin-bottom: 1rem !important;
}
}
@media only screen and (min-width:460px) and (max-width: 519px){
    .py-3 {
    padding-top: 1rem !important;
    padding-bottom: 2rem !important;
}
.justify-content-between {
    justify-content: space-evenly !important;
}
}
@media only screen and (min-width:768px) and (max-width: 991px){
    .benfitssme{
    flex: 0 0 100%;
    max-width: 100%;
}
}

@media only screen and (min-width:768px) and (max-width: 830px) {

.getme{
    position: relative;
    top: 180px;
    left: 315px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:480px;
     right: 10px;
     width: 50%;
 }





}
@media only screen and (min-width:831px) and (max-width: 924px) {

.getme{
    position: relative;
    top: 180px;
    left: 375px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:440px;
     right: 16px;
     width: 50%;
 }

}

@media only screen and (min-width:925px) and (max-width: 991px) {

.getme{
    position: relative;
    top: 100px;
    left: 425px;

}
.banner-title{
     font-size: 40px;
     position: relative;
     top:400px;
     right: 16px;
     width: 50%;
 }
}
@media only screen and (min-width:992px) and (max-width: 1100px) {

.getme{
    position: relative;
    top: 100px;
    left: 100px;

}
.banner-title{
     font-size: 35px;
     position: relative;
     top:340px;
     right: 20px;
     width: 50%;
 }
}
@media only screen and (min-width:1101px) and (max-width: 1199px) {

.getme{
    position: relative;
    top: 100px;
    left: 150px;

}

.banner-title{
     font-size: 40px;
     position: relative;
     top:340px;
     right: 50px;
     width: 50%;
 }
}



  @media only screen and (min-width:1200px) and (max-width: 1307px) {

    .getme{
        position: relative;
        top: 111px;
        left: 110px !important;

  }

  .banner-title{
     font-size: 40px;
     position: relative;
     top:360px;
     right: -35px;
     width: 40%;
 }

  }


  /* apac benifits banner explode css */

  @media only screen and (min-width:321px) and (max-width: 369px) {
    .benfitssme{
        padding: 0 100px;
    }


  }
  .row.mb-5.apac-benefits{
            margin-top: 70px !important;
            padding: 0 5px;


        }

    /*.item:hover{*/
    /*    transform: scale(1.3);*/
    /*    background:#192643;*/

    /*    border-radius: 20px;*/
    /*    z-index: 1;*/
    /*    box-shadow: 2px 2px 2px #f59c41;*/

    /*}*/
    /*.item{*/
    /*    transition: 1s;*/
    /*}*/

    /* apac benifits banner explode css ends */

    .hideDiv{background:#293f6d; width:100%; margin-bottom: 10px; color:#fff; padding:10px; text-align:center;}



    @media only screen and (min-width:1200px){
    .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
}
.benifitssof{
    background: #223764;
}
@media only screen and (min-width:320px) and (max-width: 374px) {

     .px-4 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
}
  }
@media only screen and (min-width:375px) and (max-width: 414px) {

      .mobileapp{
          position: relative;
          left: 80px;
      }
  }


@media only screen and (min-width:340px) and (max-width: 413px){
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -350px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}


@media only screen and (min-width:414px) and (max-width: 500px){
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -335px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}
@media only screen and (min-width:576px) and (max-width: 767px){
    .dp2{
        position: relative;
        left:100px;
    }
    .dp4{
        position: relative;
        left:100px;
    }
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -335px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}
@media only screen and (min-width:768px) and (max-width: 991px){
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -180px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}
@media only screen and (min-width:992px) and (max-width: 1199px){
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -260px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}
@media only screen and (min-width:1202px) and (max-width: 1700px){
    #carousel {
  height: 280px;
  width: 960px;
  background-color: transparent;
  position: relative;
  left: -165px;
  margin-bottom: 0.5em;
  /* margin-top: 80px; */
}

}


.apac_container{
    padding-bottom:0px !important;
}

.fade-left {
    animation:none !important ;
}

/*.middleBox{*/
/*    text-align: center;*/
/*    padding-bottom: 45px;*/
/*}*/


/*.budjet{*/
/*    position: relative;*/
/*    left: 60px;*/
/*    padding-bottom: 10px;*/
/*}*/
 @media only screen and (min-width:320px) and (max-width: 991px){

.budjet{
    position: relative;
    left: 60px;
    padding-bottom: 10px;
}
}


/* next section  */
.downloadAppSectionWrapper .downloadAppSection {
    max-width: 1180px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 60px;
    padding-right: 60px;
    display: grid;
    grid-template-areas: "appText appImage" "appBtn appImage";
}
.downloadAppSection {
    /* background: white !important; */

}
.downloadAppSectionWrapper .downloadAppTxtSection {
    grid-area: appText;
}
.downloadAppSectionWrapper .downloadAppImgSection {
    grid-area: appImage;
}
.downloadAppSectionWrapper .appStoreBtn {
    grid-area: appBtn;
}
.downloadAppSectionWrapper .downloadAppTxtSection .heading {
    font-size: 35px;
    font-weight: 600;
    margin: 0 0 30px;
    color: #fff;
}
.downloadAppSectionWrapper .downloadAppTxtSection .content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.downloadAppSectionWrapper .downloadAppTxtSection .content .txtSectionList {
    margin-bottom: 10px;
}
.downloadAppSectionWrapper .downloadAppTxtSection .content .txtSectionList .listValue {
    margin-left: 8px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    position: absolute;
    margin-top: -4px;
}
.downloadAppSectionWrapper .downloadAppImgSection .mobileImage {
    max-width: 100%;
}
.downloadAppSectionWrapper .appStoreBtn .playLink {
    border: none;
}

.downloadAppSectionWrapper {
    padding: 30px 0;
    /* background: #f0f8f8; */
    max-width: 1020px;
    margin: 0 auto;
}
@media only screen and (max-width: 768px){
    .downloadAppSectionWrapper .downloadAppSection {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    }
}
/*FOR FIREFOX BROWSER*/
@-moz-document url-prefix() {

        .downloadAppSectionWrapper .downloadAppTxtSection .content .txtSectionList .listValue {
  margin-left: 25px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: absolute;
  margin-top: -35px;
}
#list_emi{
    font-family: 'Montserrat', sans-serif;
    line-height: 30px;/*! font-size: 14px !important; */
    font-size: 16px;font-weight: 500;
    color: white;
  margin-left: 6px;
  margin-top: -2px;


}

}

 /*Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

 /*Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

@media only screen and (min-width:320px) and (max-width: 1200px){
    .middleBox {
  text-align: center;
  padding-bottom: 0px;
}
#temp{
    padding-top:0px;
}
}

@media only screen and (min-width:1200px) and (max-width: 4000px){
    .middleBox {
  text-align: center;
  padding-bottom: 45px;
}
#temp{
    padding-top:95px;
}
}




    </style>
    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

<script type="text/javascript">
$(document).ready(function() {
			var carousel = $("#carousel").slidingCarousel({
				squeeze: 100
			});
});
</script>
@endsection
@section('mainheading', 'Fair Practices Code')
@section('content')
<section class="section-slider section-full-width-right light" data-slider-parallax="true" data-interval="0">
    <div class="slide slide-1 fade">
        <div class="header-slider background-slider">
            <div class="active" style="background-image:url(media/slider/front_banner.jpg)"></div>
        </div>
        <div class="container">
            <hr class="space-sm" />
            <div class="row">
                <div class="col-lg-12">
                    <h1 data-anima="fade-left" data-time="2000" class="banner-title text-uppercase text-black">
                        "Great customer service
                         very easy process with APAC"
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="offset-lg-4 col-lg-7 col-md-7 col-sm-8 col-12 getme">

                       @if (Session::has('success'))
                    <div class="hideDiv">
                        {{session::get('success')}}

                      </div>
                      @elseif (Session::has('warning'))
                      <div class="hideDiv">
                          {{session::get('warning')}}

                        </div>

                      @endif


                    {{-- @if (Session::has('success1')) --}}
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;background:green">
  <strong>{{session::get('success1')}}</strong>
</div>
@endif --}}
                    <div class="card rounded banner-cta">
                        <div class="card-header d-flex">
                            <div class="cta-title fs-5 px-3 pt-2 text-bg-theme-secondary fw-bold">Get your business loan now  </div>
                        </div>
                        <div class="card-body p-3">
                            <form action="{{route('home_intro.store_home_intro_formone')}}"  method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="fullname1" class="text-dark">What's your full
                                                name?</label>
                                            <input type="text" id="fullname1" name="fullname1"
                                                placeholder="Enter Your Name" class="form-control rounded" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="mobilenumber1" class="text-dark">What's your mobile
                                                number?</label>
                                            <input type="number" id="mobilenumber1" name="mobilenumber1" minlength="10"
                                                maxlength="10" placeholder="Enter Your Mobile Number"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="pincode1" class="text-dark">What's your PIN code?</label>
                                            <input type="number" id="pincode1" name="pincode1" 
                                                maxlength="6" placeholder="Enter Your PIN Code"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-end">
                                        <button class="btn btn-default py-2 rounded w-100">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space-lg" />
        </div>
    </div>
    <div class="slide slide-2 fade">
        <div class="header-slider background-slider">
            <div class="active" style="background-image:url(media/slider/slido22.jpg)"></div>
        </div>
        <div class="container">
            <!-- <hr class="space-lg" /> -->
            <hr class="space-sm" />
            <div class="row">
                <div class="col-lg-12">
                    <h1 data-anima="fade-left" data-time="2000" class="banner-title text-uppercase text-black">
                        "Thanks to APAC,<br>
                         I expanded my business"
                    </h1>
                </div>
            </div>
            <!-- <hr class="space-lg" />
            <hr class="space-lg" /> -->
            <div class="row">

                <div class="offset-lg-4 col-lg-7 col-md-7 col-sm-8 col-12 getme">
                    @if (Session::has('success'))
                    <div class="hideDiv">
                        {{session::get('success')}}

                      </div>
                      @elseif (Session::has('warning'))
                      <div class="hideDiv">
                          {{session::get('warning')}}

                        </div>

                      @endif

                    <div class="card rounded banner-cta">
                        <div class="card-header d-flex">
                            <div class="cta-title fs-5 px-3 pt-2 text-bg-theme-secondary fw-bold">Get your business loan now</div>
                        </div>
                        <div class="card-body p-3">
                            <form action="{{route('home_intro.store_formtwo')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="fullname2" class="text-dark">What's your full
                                                name?</label>
                                            <input type="text" id="fullname2" name="fullname2"
                                                placeholder="Enter Your Name" class="form-control rounded" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="mobilenumber2" class="text-dark">What's your mobile
                                                number?</label>
                                            <input type="number" id="mobilenumber2" name="mobilenumber2" 
                                                maxlength="10" placeholder="Enter Your Mobile Number"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="pincode2" class="text-dark">What's your PIN code?</label>
                                            <input type="number" id="pincode2" name="pincode2" 
                                                maxlength="6" placeholder="Enter Your PIN Code"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-end">
                                        <button class="btn btn-default py-2 rounded w-100">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space-lg" />
        </div>
    </div>
    <div class="slide slide-3 fade">
        <div class="header-slider background-slider">
            <div class="active" style="background-image:url(media/slider/slido3.jpg)"></div>
        </div>
        <div class="container">
            <!-- <hr class="space-lg" /> -->
            <hr class="space-sm" />
            <div class="row">
                <div class="col-lg-12">
                    <h1 data-anima="fade-left" data-time="2000" class="banner-title text-uppercase text-black">
                       "Thanks to APAC,<br>
                        my dream was fulfilled"
                    </h1>
                </div>
            </div>
            <!-- <hr class="space-lg" />
            <hr class="space-lg" /> -->
            <div class="row">
                <div class="offset-lg-4 col-lg-7 col-md-7 col-sm-8 col-12 getme">

                        @if (Session::has('success'))
                    <div class="hideDiv">
                        {{session::get('success')}}

                      </div>
                      @elseif (Session::has('warning'))
                      <div class="hideDiv">
                          {{session::get('warning')}}

                        </div>

                      @endif

                    <div class="card rounded banner-cta">
                        <div class="card-header d-flex">
                            <div class="cta-title fs-5 px-3 pt-2 text-bg-theme-secondary fw-bold">Get your business loan now </div>
                        </div>
                        <div class="card-body p-3">


                            <form action="{{route('home_intro.store_formthree')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="fullname3" class="text-dark">What's your full
                                                name?</label>
                                            <input type="text" id="fullname3" name="fullname3"
                                                placeholder="Enter Your Name" class="form-control rounded" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="mobilenumber3" class="text-dark">What's your mobile
                                                number?</label>
                                            <input type="number" id="mobilenumber3" name="mobilenumber3" 
                                                maxlength="10" placeholder="Enter Your Mobile Number"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="pincode3" class="text-dark">What's your PIN code?</label>
                                            <input type="number" id="pincode3" name="pincode3" 
                                                maxlength="6" placeholder="Enter Your PIN Code"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-end">
                                        <button class="btn btn-default py-2 rounded w-100">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space-lg" />
        </div>
    </div>

    <div class="slide slide-3 fade">
        <div class="header-slider background-slider">
            <div class="active" style="background-image:url(media/slider/slido2.JPEG)"></div>
        </div>
        <div class="container">
            <!-- <hr class="space-lg" /> -->
            <hr class="space-sm" />
            <div class="row">
                <div class="col-lg-12">
                    <h1 data-anima="fade-left" data-time="2000" class="banner-title text-uppercase text-black">
                       "APAC helped me,<br>
                        expand my stationary shop"
                    </h1>
                </div>
            </div>
            <!-- <hr class="space-lg" />
            <hr class="space-lg" /> -->
            <div class="row">
                <div class="offset-lg-4 col-lg-7 col-md-7 col-sm-8 col-12 getme">

                        @if (Session::has('success'))
                    <div class="hideDiv">
                        {{session::get('success')}}

                      </div>
                      @elseif (Session::has('warning'))
                      <div class="hideDiv">
                          {{session::get('warning')}}

                        </div>

                      @endif

                    <div class="card rounded banner-cta">
                        <div class="card-header d-flex">
                            <div class="cta-title fs-5 px-3 pt-2 text-bg-theme-secondary fw-bold">Get your business loan now </div>
                        </div>
                        <div class="card-body p-3">


                            <form action="{{route('home_intro.store_formfour')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="fullname4" class="text-dark">What's your full
                                                name?</label>
                                            <input type="text" id="fullname4" name="fullname4"
                                                placeholder="Enter Your Name" class="form-control rounded" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group mb-3">
                                            <label for="mobilenumber4" class="text-dark">What's your mobile
                                                number?</label>
                                            <input type="number" id="mobilenumber4" name="mobilenumber4" 
                                                maxlength="10" placeholder="Enter Your Mobile Number"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="pincode4" class="text-dark">What's your PIN code?</label>
                                            <input type="number" id="pincode4" name="pincode4" 
                                                maxlength="6" placeholder="Enter Your PIN Code"
                                                class="form-control rounded" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex align-items-end">
                                        <button class="btn btn-default py-2 rounded w-100">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space-lg" />
        </div>
    </div>


</section>


<button id="btnOpenForm_2" hidden></button>

<div class="form-popup-bg-2">
  <div class="form-container_2" id="form-container_id">

  </div>
</div>




<!--<section class="section-af-bg">-->
<section class="section-af-bg benifitssof" style=" background: url(media/icons/use-svg-as-background-image-particle-strokes.svg);
">

<!--<section class="section-af-bg-dark" style=" background: url(media/icons/12.svg) center;-->
<!--  background-attachment: fixed;-->
<!--  background-size: contain;">-->


    <div class="container">
      <h1 class="emi_tle text-uppercase text-white pt-3 d-flex justify-content-center">NOT SURE? LETS CALCULATE YOUR EMI
      </h1>
      <div class="row">
        <div class="col-lg-8 col-md-12" style="background: white;padding:18px 20px;border-radius:10px;">
          <div class="sub-container" >
          <div class="view" style="width: 60%;">
            <div class="details">
              <div style="margin-bottom: 10px;">
                <div class="detail">
                  <p style="color: #293F6D;font-weight: bold;margin-top:10px;">Choose Your Loan Amount  (<span>&#8377;</span>)</p>
                  <input type="number" id="loan-amounts" class="common_input"    placeholder="Enter Your Amount" style="width: 150px;color: #1F3668;font-weight: bold;"  step="1" value="{{$emiupdate->min_amount}}" onKeyPress="if(this.value.length==9) return false;" >
                  <p id="loan-amt-text" style="color: #F39838;font-weight: bold;" hidden>350000</p >
                </div>
                <input type="range" class="styled-slider slider-progress" id="loan-amount" min="{{$emiupdate->min_amount}}" max="{{$emiupdate->max_amount}}"  step="1000" value="350000"/>
                <div class="limits" style="display: flex;justify-content: space-between;">
                  <p style="color: #9a9696;margin-top: 8px;" id="min_amount_hint">3.5L</p>
                  <p class="error" id="loanErr"></p>
                  <p style="color: #9a9696" id="max_amount_hint">2Cr</p>
                </div>
              </div>
              <div style="margin-bottom: 10px;">
                <div class="detail" >
                  <p style="color: #293F6D;font-weight: bold;margin-top: 10px;" >Interest rate  (P.A)</p>
                  <input type="number" id="interest-rate-texts"  step=".1" class="common_input" placeholder="Enter Your Interest" style="width: 150px;color: #1F3668;font-weight: bold;" min="{{$emiupdate->min_interest}}" max="{{$emiupdate->min_interest}}" value="{{$emiupdate->min_interest}}" onKeyPress="if(this.value.length==2) return false;">

                  <p id="interest-rate-text" style="color: #F39838;font-weight: bold;" hidden>14.8%</p>
                </div>
                <input type="range" id="interest-rate" min="{{$emiupdate->min_interest}}" max="{{$emiupdate->max_interest}}" step=".1" class="styled-slider slider-progress" value="{{$emiupdate->min_interest}}">
                <div class="limits" style="display: flex;justify-content: space-between;">
                  <p style="color: #9a9696;margin-top: 8px;">{{$emiupdate->min_interest}}%</p>
                  <p class="error" id="loaninterestErr"></p>
                  <p style="color: #9a9696">{{$emiupdate->max_interest}}%</p>
                </div>
              </div>
              <div >
                <div class="detail">
                  <p style="color: #293F6D;font-weight: bold;;margin-top: 10px;">Tenure (Year)</p>
                  <input type="number" id="loan-period-texts"  step="1" class="common_input" placeholder="Enter Your Tenure" style="width: 150px;color: #1F3668;font-weight: bold;" min="{{$emiupdate->min_tenure}}" max="{{$emiupdate->max_tenure}}" step="1" value="{{$emiupdate->min_tenure}}"  onKeyPress="if(this.value.length==2) return false;">

                  <p id="loan-period-text" style="color: #F39838;font-weight: bold;" hidden>8 years</p>
                </div>
                <input type="range" id="loan-period" min="{{$emiupdate->min_tenure}}" max="{{$emiupdate->max_tenure}}" step="1" value="{{$emiupdate->min_tenure}}" class="styled-slider slider-progress">
                <div class="limits" style="display: flex;justify-content: space-between;">
                  <p style="color: #9a9696;margin-top: 8px;">{{$emiupdate->min_tenure}}</p>
                  <p class="error" id="loanperiodErr"></p>
                  <p style="color: #9a9696">{{$emiupdate->max_tenure}}</p>
                </div>
              </div>

            </div>
          </div>
          <div class="breakup" style="width: 40%;background: #E1E4E9;display: flex;align-items: center;text-align: center;border-radius: 10px;" >
            <div class="footer" style="display: flex;justify-content:center;">
              <p id="price-container"><span style="font-size: 36px;color: #F39838;font-weight: bold;
                ">&#8377;<span id="price">46,246.251</span></span></p>
              <button class="btn btn-info bt_demo" style="position:absolute;margin-top:105px;padding:12px;background-color: #1F3668 !important;
              border-color: #1F3668 !important;font-size:16px !important;
  font-family: 'Montserrat', sans-serif !important;"  id="btnOpenForm"> Get a Call Back</button>
            </div>
          </div>
          </div>
        </div>
        {{-- EMI MONTHLY  SECTION--}}
        <div class="col-lg-4 col-md-12 break_space">
          <div class="container" style="background: white;padding:10px 20px;border-radius:10px;">
            <h3 style="text-align: center;">Break-up of Total Payment</h3>
            <div class="breakuped" style="width:70%;margin-left: 40px;">
              <canvas id="pieChart" width="325" height="325" style="display: block; box-sizing: border-box; height: 325px; width: 325px;margin-bottom: 5px;"></canvas>
            </div>
            <div id="main" style="display: flex;
            justify-content: space-between;">
              <div style="color: #293F6D;font-weight: bold;;font-size: 16px;"><span>&#9632;</span> Principal</div>
              <div id="cp" style="color: #F39838;font-weight: bold; font-size: 16px;">5,000,000</div>
            </div>
            <hr>
            <div id="main" style="display: flex;
            justify-content: space-between;">
              <div style="color: #293F6D;font-weight: bold;;font-size: 16px;"><span style="color: #F49C41">&#9632;</span> Interest</div>
              <div id="ci" style="color: #F39838;font-weight: bold; font-size: 16px;">3,879,280.259</div>
            </div>
            <hr>
            <div id="main" style="display: flex;
            justify-content: space-between;">
              <div style="color: #293F6D;font-weight: bold;;font-size: 16px;">Total Payable</div>
              <div id="ct" style="color: #F39838;font-weight: bold; font-size: 16px;">8,879,280.259</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





<section class="section-af-bg-dark"
<!--style=" background: url(media/icons/12.svg) center;-->
<!--background-attachment: fixed;-->
<!--background-size: contain;" -->
>

    {{-- <div class="circle-thick bg-img img-container" style="width: 449px;">
        <img src="media/icons/circle-thick.svg" alt="" class="img-responsive">
    </div> --}}

    {{-- <div class="line-group bg-img img-container">
        <img src="media/icons/line-group.svg" alt="" class="img-responsive">
    </div> --}}
    <div class="demo">
    </div>
    <div class="container apac_container" style="padding-top: 0px !important;background-image:url('media/icons/hex.svg')" >

        <div class="row pos-relative pt-5">
            <div class="apacInGlance col-lg-5 col-md-12 col-sm-12 col-12" style="padding-bottom: 30px;">
                <h1 class="text-uppercase text-white headingcentered" style="display: flex;
                ">Apac at a Glance</h1>
                <!--<p class="apac_at_glance_quote" style="line-height: 1.8 !important;-->
                <!--word-spacing: 4px !important;-->
                <!--text-align: justify;font-style: italic;">“APAC exists because we believe that all deserving micro & small businesses should focus on growth instead of being constrained by access to capital”</p>-->
                <!--<p  class="apac_at_glance">-->
                    {!!$apac_home->glance_desc!!}
                </p>
                <!--<p  class="apac_at_glance">-->
                <!--    APAC is a young, growing company – we started business operations in 2018 with the vision of servicing the financial needs of underbanked and underserved MSMEs in Bharat. Whether it is for purchasing stock, modernizing your business or any other financial requirement, APAC can provide quick, customized loans that fulfill your dreams!-->
                <!--</p>-->
                <!--<div class="row">-->
                <!--    <div class="col-12">-->
                <!--        <p  style="color: white;font-size: 26px;text-align:center;-->
                <!--        font-weight: 700;line-height:1.2;text-transform:uppercase;padding-top: 35px;">Backed by Marquee Investors & Lenders</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <div class="col-lg-7 col-md-12 col-sm-6 col-12 pos-relative" id="temp">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                        <div class="middleBox" style="text-align: center">
                            <span style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;    position: relative;
                            top: 7px;">&#x20b9;</span>
                              {{-- <i class="bi bi-star-fill" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i> --}}
                              <h1 class="text-white mb-2" style="text-align:center;margin-top: 26px;font-size:25px;"><span style="color: white;padding:0 10px;">Rs.</span><span id="aum" class="counterNumber text-white">{{$apac_home->aum}}</span><span class="" style="color: white;padding:0 10px;">Crore</span></h1>
                              <!--<h1 style="font-size: 45px;padding:5px 5px;color:#f59c41;margin-top: 26px;font-size:25px;"><span style="color: white;padding:0 10px;">Rs.</span><span class="text-white mb-2" id="aum"  data-to="717"  data-speed="4000"  style="color:white;">717</span><span class="" style="color: white;padding:0 10px;">Crore</span></h1>-->
                              <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">AUM</h1>
                        </div>
                      </div>

                          <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                            <div class="middleBox" style="text-align: center">
                                 <i class="bi bi-geo-alt-fill" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i>
                                <!--<i class="bi bi-building" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i>-->
                                <h1 class="text-white mb-2" style="text-align:center;margin-top: 20px;font-size:25px;"><span id="branches" class="counterNumber text-white">{{$apac_home->branches}}</span></h1>
                                <!--<h1 class="text-white mb-2" id="branches" data-to="95"  data-speed="4000" style="text-align:center;margin-top: 20px;font-size:25px;">95</h1>-->
                                <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">Branches</h1>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                            <div class="middleBox" style="text-align: center">
                                  <i class="bi bi-emoji-smile-fill" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i>
                                  <h1 class="text-white mb-2" style="text-align:center;margin-top: 20px;font-size:25px;"><span id="customers" class="counterNumber text-white">{{$apac_home->customers}}</span></h1>
                                  <!--<h1 class="text-white mb-2" id="customers" data-to="14619"  data-speed="4000" style="text-align:center;margin-top: 20px;font-size:25px;">14,619</h1>-->
                                  <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">Happy Customers </h1>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                            <div class="middleBox" style="text-align: center">
                                 <img src="media/icons/EMPLOYESS.png"
                                    alt="Disbursal within hours" class="img-responsive" style="height:65px;width:90px;padding-bottom:5px;padding-left: 5px;border-bottom:2px solid white;">
                                  <!--<i class="bi bi-people-fill" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i>-->
                                  <h1 class="text-white mb-2" style="text-align:center;margin-top: 0px;font-size:25px;"><span id="employees" class="counterNumber text-white">{{$apac_home->employees}}</span></h1>
                                  <!--<h1 class="text-white mb-2" id="employees"  data-to="838"  data-speed="4000" style="text-align:center;margin-top: 0px;font-size:25px;">838</h1>-->
                                  <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">Employees</h1>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                            <div class="middleBox" style="text-align: center">
                              <i class="bi bi-star-fill" style="font-size: 45px;padding:12px;color:#f59c41;border-bottom:2px solid white;"></i>

                                  <!--<h1 class="text-white mb-2" style="text-align:center;margin-top: 25px;font-size:25px;"><span id="stable" class="counterNumber text-white">{{$apac_home->stable}}</span></h1>-->
                                   <h1 class="text-white mb-2" id="stable"  style="text-align:center;margin-top: 26px;font-size:25px;white-space: nowrap;">{{$apac_home->stable}}</h1>
                                  <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">Credit Rating</h1>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-6 col-12 datapoints">


                            <div class="middleBox" style="text-align: center">

                                <img src="media/icons/map_new.png"
                                    alt="Disbursal within hours" class="img-responsive" style="border-bottom:2px solid white;height:65px;width:60px;padding-bottom:5px;padding-left: 5px;">
                                <!--<i class="bi bi-geo-alt-fill" style="font-size: 45px;padding:5px;color:#f59c41;border-bottom:2px solid white;"></i>-->

                                <h1 class="text-white mb-2" style="text-align:center;margin-top: 0px;font-size:25px;"><span id="states" class="counterNumber text-white">{{$apac_home->states}}</span></h1>
                                  <!--<h1 class="text-white mb-2" id="states"  data-to="6"  data-speed="4000"  style="text-align:center;margin-top: 0px;font-size:25px;">6</h1>-->
                                  <h1 style="text-align: center;font-size:1rem;font-weight:400;line-height:1.5;color:white;">States</h1>
                            </div>
                          </div>






                </div>


               <!--<p class="text-center pos-relative mb-sm-3"><img src="media/icons/new_mult.jpeg" alt="" style="border-radius:8px;"></p>-->



<!--<div class="row budjet">-->

<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/capital_new.png" class="news_icon" alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/eqiutas_test.jpeg" class="news_icon"alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/Federal-Bank_new.jpeg"  class="news_icon" alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/idfc_new.jpeg"  class="news_icon" alt="">-->
<!--    </div>-->

<!--</div>-->
<!--<div class="row budjet">-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/kotak_hide.jpeg" class="news_icon" alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/sidbi-1.jpeg" class="news_icon"alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/Tata_Capital_Logo-01.jpeg"  class="news_icon" alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/yesbank123.png"  class="news_icon" alt="">-->
<!--    </div>-->

<!--</div>-->
<!--<div class="row budjet">-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/icici_bank_hide.jpeg" class="news_icon" alt="">-->
<!--    </div>-->
<!--    <div class="col-lg-3 col-md-6 col-sm-6 col-12">-->
<!--        <img src="media/icons/IndusIndBankJPEGlogo.jpeg" class="news_icon"alt="">-->
<!--    </div>-->


<!--</div>-->



     </div>



        </div>
    </div>
</section>




<!--<section class="section-af-bg">-->

<section class="section-af-bg benifitssof" style=" background: url(media/icons/use-svg-as-background-image-particle-strokes.svg);
">
    <!--<div class="circle-thick-2 bg-img img-container">-->
    <!--    <img src="media/icons/circle-thick-2.svg" alt="" class="img-responsive">-->
    <!--</div>-->

    <div class="container" style="padding-top:75px;padding-bottom:50px;">
        <div class="col-12">
            <h1 class="text-white text-uppercase headingcentered" style="display: flex;
            justify-content: center;">Benefits Of Apac Loans</h1>
        </div>
        <div class="row mb-5 apac-benefits">

            <div class="col-lg-12 col-md-9 col-sm-8 col-12 benfitssme">
                <div class="d-flex justify-content-evenly benefits rounded section-af-bg-dark light flex-wrap" style="background: #192643">
                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                                class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos1) }}"
                                    alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points1}}</p>
                        </div>
                    </div>
                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos2) }}"
                                alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points2}}</p>
                        </div>
                    </div>
                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos3) }}"
                                alt="Disbursal within hours" class="img-responsive">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points3}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                                class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos4) }}"
                                    alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points4}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos5) }}"
                                alt="Disbursal within hours" class="img-responsive">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points5}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                                class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos6) }}"
                                    alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points6}}</p>
                        </div>
                    </div>
                     <div class="item text-center pos-relative py-3 px-4 mb-sm-3 mobileapp">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <a href="https://play.google.com/store/apps/details?id=com.apacfin.apacm" target="_blank"><img src="{{ asset('benifits_icons/'.$apac_home->benefit_logos7) }}"
                                alt="Disbursal within hours" class="img-responsive" style="
                                position: relative;
                                top: 5px;
                            "></a>
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$apac_home->points7}}</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
  </section>
<section class="section-af-bg-dark">
    <div class="downloadAppSectionWrapper">
        <div class="downloadAppSection">
            <div class="downloadAppTxtSection">
                <div class="heading"><h1 class="text-uppercase text-white headingcentered" style="display: flex;
                ">Download Our App</h1></div>
                <div class="content">
                    <div class="txtSectionList">
                        <span class="checkIcon">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Orange_check.svg/2048px-Orange_check.svg.png" alt="checkbox" width="20" height="20">
                        </span>
                            <span class="listValue">Real time loan tracking </span>
                        </div>
                        <div class="txtSectionList">
                            <span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Orange_check.svg/2048px-Orange_check.svg.png" alt="checkbox" width="20" height="20">
                            </span>
                            <span class="listValue">Access your documents </span>
                        </div>
                        <div class="txtSectionList">
                            <span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Orange_check.svg/2048px-Orange_check.svg.png" alt="checkbox" width="20" height="20">
                            </span><span class="listValue" id="list_emi">Pay your EMI</span>
                        </div><div class="txtSectionList">
                            <span>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Orange_check.svg/2048px-Orange_check.svg.png" alt="checkbox" width="20" height="20">
                            </span>
                            <span class="listValue">Service requests</span>
                        </div>
                        </div>
                    </div>
                    <div class="downloadAppImgSection">
                        <img src="{{ asset('benifits_icons/'.$apac_home->app_img) }}" class="mobileImage" alt="mobileNav" width="250" height="450">
                    </div><div class="appStoreBtn m-t-20">
                        <button type="button" class="playLink" style="background: transparent;">
                            <a href="https://play.google.com/store/apps/details?id=com.apacfin.apacm" target="_blank">
                            <img src="media/logos/google-play-badge.png" width="150" height="62" alt="Google play" >
                            </a>
                        </button>
                    </div>
                </div>
            </div>
</section>
<div class="form-popup-bg">
  <div class="form-container">
    <button id="btnCloseForm" class="close-button">X</button>
    <h1 class="emi_tle text-uppercase text-white pt-3 d-flex justify-content-center">Get your business loan now</h1>
    <form>
      @csrf
      <div class="form-group" style="margin-bottom: 10px;">
        <label for="">What's your full name?</label>
        <input type="text" class="common_input" id="fullnames" name="fullnames" placeholder="Enter Your Name" onKeyPress="return ValidateAlpha(event);"/>
        <div class="error" id="fullnameErr" ></div>
      </div>
      <div class="form-group" style="margin-bottom: 10px;">
        <label for="">What's your mobile number?</label>
        <input class="common_input" type="number" id="mobilenumbers" name="mobilenumbers" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter Your Mobile Number" maxlength="10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"/>
        <div class="error" id="mobilenumberErr"></div>

      </div>
      <div class="form-group"style="margin-bottom: 10px;">
        <label for="">What's your PIN code?</label>
        <input class="common_input" type="number" id="pincodes" name="pincodes" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" placeholder="Enter Your PIN code" maxlength="6" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"/>
        <div class="error" id="pincodeErr"></div>

      </div>
      <div class="" style="
        display: flex;
        justify-content: center;
    ">
      <button class="btn btn-danger" style="background-color: #F39838 !important;
      border-color: #F39838 !important;padding:10px;margin-top: 15px;" type="button" id="loan_apply" onclick="loanapply()">Apply Now</button>
      </div>
    </form>
  </div>
  </div>





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
<!--<script src="themekit/scripts/scrolls.min.js"></script>-->

<script>
    $(function() {
setTimeout(function() { $(".hideDiv").fadeOut(10000); }, 2000)

})
</script>


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)
    {
        // console.log(document.documentElement.scrollTop);
        $("#temp").fadeIn("slow").css("display","block");
        //   document.querySelector("#customers").innerText =
        //   Math.round(14619).toLocaleString("en-IN");
    }
    else
    {
        // console.log(document.documentElement.scrollTop);
        $("#temp").fadeOut("slow").css("display","none");


        document.getElementById("branches").setAttribute("data-trigger"," ");
        document.getElementById("states").setAttribute("data-trigger"," ");
        document.getElementById("employees").setAttribute("data-trigger"," ");
        document.getElementById("customers").setAttribute("data-trigger"," ");

    }
    }
  </script>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
 <script id="rendered-js">


var P, R, N, pie, line;
var loan_amt_slider = document.getElementById("loan-amount");
// var loan_amounts = document.getElementById("loan-amounts");
var int_rate_slider = document.getElementById("interest-rate");
var loan_period_slider = document.getElementById("loan-period");

function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

document.getElementById("loan-amounts").addEventListener("keyup", displayDetail);

document.getElementById("loan-period-texts").addEventListener("keyup", displayDetailperiod);

document.getElementById("interest-rate-texts").addEventListener("keyup", displayDetailinterest);
function displayDetailperiod(){
  var checking_period= document.getElementById("loan-period-texts").value;

  var loanperiodErr  = true;
  if(checking_period.length == "") {
      printError("loanperiodErr", "Please Enter Your Tenure");
      document.getElementById("loan-period-texts").style.borderColor = "red";
      document.getElementById('loanperiodErr').style.color = "red";
  }
  else
  {
    if(checking_period >=  @json($emiupdate->max_tenure+.1) ) {
        printError("loanperiodErr", "Max-period is "+@json($emiupdate->max_tenure)+"-year");
        document.getElementById("loan-period-texts").style.borderColor = "red";
        document.getElementById('loanperiodErr').style.color = "red";
      }
      else if(checking_period <= @json($emiupdate->min_tenure-.1)) {
        printError("loanperiodErr", "Min-period is "+@json($emiupdate->min_tenure)+"-year");
        document.getElementById("loan-period-texts").style.borderColor = "red";
        document.getElementById('loanperiodErr').style.color = "red";
      }
       else{
        printError("loanperiodErr", "");
        loanperiodErr = false;
        document.getElementById("loan-period-texts").style.borderColor = "";
        document.getElementById('loanperiodErr').style.color = "";
    }
    }
    if(loanperiodErr  == true) {
      return false;
    }else{
      N =document.getElementById("loan-period-texts").value;
      displayDetails();
    }
  // N =document.getElementById("loan-period-texts").value;
  // displayDetails();
}
function displayDetailinterest(){
  var checking_interest = document.getElementById("interest-rate-texts").value;

  var loaninterestErr  = true;
  if(checking_interest.length == "") {
      printError("loaninterestErr", "Please Enter Your interest");
      document.getElementById("interest-rate-texts").style.borderColor = "red";
      document.getElementById('loaninterestErr').style.color = "red";
  }
  else
  {
    if(checking_interest >= @json($emiupdate->max_interest+.1) ) {
        printError("loaninterestErr", "Max-interest is "+@json($emiupdate->max_interest)+"%");
        document.getElementById("interest-rate-texts").style.borderColor = "red";
        document.getElementById('loaninterestErr').style.color = "red";
      }
      else if(checking_interest <= @json($emiupdate->min_interest-.1)) {
        printError("loaninterestErr", "Min-interest is "+@json($emiupdate->min_interest)+"%");
        document.getElementById("interest-rate-texts").style.borderColor = "red";
        document.getElementById('loaninterestErr').style.color = "red";
      }
       else{
        printError("loaninterestErr", "");
        loaninterestErr = false;
        document.getElementById("interest-rate-texts").style.borderColor = "";
        document.getElementById('loaninterestErr').style.color = "";

    }
    }
    if(loaninterestErr  == true) {
      return false;
    }else{
      R =document.getElementById("interest-rate-texts").value;
      displayDetails();
    }
  // R =document.getElementById("interest-rate-texts").value;
  // displayDetails();
}


function displayDetail(){
  var checking = document.getElementById("loan-amounts").value;

  var loanErr  = true;
  if(checking.length == "") {
      printError("loanErr", "Please Enter Your Amount");
      document.getElementById("loan-amounts").style.borderColor = "red";
      document.getElementById('loanErr').style.color = "red";
  }
  else
  {
    var max_validation_temp = @json($emiupdate->max_amount);
    var min_validation_temp = @json($emiupdate->min_amount);
    if(max_validation_temp.length == 4 || max_validation_temp.length == 5 ){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 1).toFixed(2))/10 + "K";
    }else if(max_validation_temp.length == 6 || max_validation_temp.length == 7){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 2).toFixed(2))/10 + "L";
    }else if(max_validation_temp.length == 8 || max_validation_temp.length == 9){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 3).toFixed(2))/10 + "Cr";
    }
    if(min_validation_temp.length == 4 || min_validation_temp.length == 5 ){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 1).toFixed(2))/10 + "K";
    }else if(min_validation_temp.length == 6 || min_validation_temp.length == 7){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 2).toFixed(2))/10 + "L";
    }else if(min_validation_temp.length == 8 || min_validation_temp.length == 9){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 3).toFixed(2))/10 + "Cr";
    }

    if(checking >= @json($emiupdate->max_amount+1) ) {
        printError("loanErr", "Maximum Amount is Rs. "+max_validation+"");
        document.getElementById("loan-amounts").style.borderColor = "red";
        document.getElementById('loanErr').style.color = "red";

      }
      else if(checking <= @json($emiupdate->min_amount-1)) {
        printError("loanErr", "Minimum Amount is Rs. "+min_validation+"");
        document.getElementById("loan-amounts").style.borderColor = "red";
        document.getElementById('loanErr').style.color = "red";
      }
       else{
        printError("loanErr", "");
        loanErr = false;
        document.getElementById("loan-amounts").style.borderColor = "";
        document.getElementById('loanErr').style.color = "";
    }
    }
    if(loanErr  == true) {
      return false;
    }
    else{
      P = document.getElementById("loan-amounts").value;
      displayDetails();
    }

  // P =document.getElementById("loan-amounts").value;
  // displayDetails();
}
// update loan amount
loan_amt_slider.addEventListener("input", self => {
document.querySelector("#loan-amt-text").innerText =
parseInt(self.target.value).toLocaleString("en-US") ;
P = parseFloat(self.target.value);
$("#loan-amounts").val(P);
displayDetail();
displayDetails();
});



// update Rate of Interest
int_rate_slider.addEventListener("input", self => {
document.querySelector("#interest-rate-text").innerText =
self.target.value + "%";
R = parseFloat(self.target.value);
$("#interest-rate-texts").val(R);
displayDetailinterest();
displayDetails();
});


// update loan period
loan_period_slider.addEventListener("input", self => {
document.querySelector("#loan-period-text").innerText =
self.target.value + " years";
N = parseFloat(self.target.value);
$("#loan-period-texts").val(N);
displayDetailperiod();
displayDetails();
});


// calculate total Interest payable
function calculateLoanDetails(p, r, emi) {
/*
  p: principal
  r: rate of interest
  emi: monthly emi
*/
// 350000 = 15 = 1
// 31,590 = 15 = 1

// p = 350000
// r = 0.0125
// n = 12
// num = 5078.301015038117
// denom = 0.1607545177229981
// emi = 31590.409320805033
// interest = 4375
// p = 322784.59067919495
// totalInterest = 4375
// principal = 27215.409320805033
// interes = 4375

let totalInterest = 0;
let yearlyInterest = [];
let yearPrincipal = [];
let years = [];
let year = 1;
let [counter, principal, interes] = [0, 0, 0];
while (p > 0) {
    // if (window.CP.shouldStopExecution(0)) break;
  let interest = parseFloat(p) * parseFloat(r);
  p = parseFloat(p) - (parseFloat(emi) - interest);
  totalInterest += interest;
  principal += parseFloat(emi) - interest;
  interes += interest;
  if (++counter == 12) {
    // alert(counter);
    years.push(year++);
    yearlyInterest.push(parseInt(interes));
    yearPrincipal.push(parseInt(principal));
    counter = 0;
  }
}
// window.CP.exitedLoop(0);
line.data.datasets[0].data = yearPrincipal;
line.data.datasets[1].data = yearlyInterest;
line.data.labels = years;
return totalInterest;
}

// calculate details
function displayDetails() {

  // $("#loan-amounts").val(P);
  // $("#loan-period-texts").val(N);
  // $("#interest-rate-texts").val(R);

  /*
  p: principal
  r: rate of interest
  emi: monthly emi
*/
// r = 0.0125
// n = 12
// num = 5078.301015038117
// denom = 0.1607545177229981
// emi = 31590.409320805033
let r = parseFloat(R) / 1200;
let n = parseFloat(N) * 12;

let num = parseFloat(P) * r * Math.pow(1 + r, n);

let denom = Math.pow(1 + r, n) - 1;
let emi = parseFloat(num) / parseFloat(denom);

let payabaleInterest = calculateLoanDetails(P, r, emi);

let opts = '{style: "decimal", currency: "US"}';

document.querySelector("#cp").innerText =
Math.round(parseFloat(P)).toLocaleString("en-IN") ;

document.querySelector("#ci").innerText =
Math.round(parseFloat(payabaleInterest)).toLocaleString("en-IN") ;

document.querySelector("#ct").innerText =
Math.round(parseFloat(parseFloat(P) + parseFloat(payabaleInterest))).toLocaleString("en-IN");

document.querySelector("#price").innerText =
Math.round(parseFloat(emi)).toLocaleString("en-IN");

pie.data.datasets[0].data[0] = P;
pie.data.datasets[0].data[1] = payabaleInterest;
pie.update();
line.update();
}

// Initialize everything
function initialize() {
document.querySelector("#loan-amt-text").innerText =
parseInt(loan_amt_slider.value).toLocaleString("en-US") ;
P = parseFloat(document.getElementById("loan-amount").value);

document.querySelector("#interest-rate-text").innerText =
int_rate_slider.value + "%";
R = parseFloat(document.getElementById("interest-rate").value);

document.querySelector("#loan-period-text").innerText =
loan_period_slider.value + " years";
N = parseFloat(document.getElementById("loan-period").value);

line = new Chart(document.getElementById("lineChart"), {
  data: {
    datasets: [
    {
      type: "line",
      label: "Yearly Principal paid",
      borderColor: "rgb(54, 162, 235)",
      data: [] },

    {
      type: "line",
      label: "Yearly Interest paid",
      borderColor: "rgb(255, 99, 132)",
      data: [] }],


    labels: [] },

  options: {
    plugins: {
      title: {
        display: true,
        text: "Yearly Payment Breakdown" } },


    scales: {
      x: {
        title: {
          color: "grey",
          display: true,
          text: "Years Passed" } },


      y: {
        title: {
          color: "grey",
          display: true,
          text: "Money in Rs." } } } } });

pie = new Chart(document.getElementById("pieChart"), {
  type: "doughnut",
  data: {
    // labels: ["Principal", "Interest"],
    datasets:
    [
      {
        label: "Home Loan Details",
        data: [0, 0],
        backgroundColor: ["#293F6D", "#F49C41"],
        hoverOffset: 4
      }
    ]
  },

});

displayDetails();
}
initialize();
      </script>



<script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-5e03f34e38152f20eb79c96b0b89c2d99c5085e9ae9386dc71e2f0b3c30bf513.js"></script>

    <script>
    function closeForm() {
      $('.form-popup-bg').removeClass('is-visible');
    }

    $(document).ready(function($) {

      /* Contact Form Interactions */
      $('#btnOpenForm').on('click', function(event) {
        event.preventDefault();

        $('.form-popup-bg').addClass('is-visible');
      });

        //close popup when clicking x or off popup
      $('.form-popup-bg').on('click', function(event) {
        if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
          event.preventDefault();
          $(this).removeClass('is-visible');
        }
      });

      });
    </script>
    <script>
    function closeForm() {
      $('.form-popup-bg-2').removeClass('is-visible');
    }

    $(document).ready(function($) {

      /* Contact Form Interactions */
      $('#btnOpenForm_2').on('click', function(event) {
        event.preventDefault();
        $('.form-popup-bg-2').addClass('is-visible');
      });

        //close popup when clicking x or off popup
      $('.form-popup-bg-2').on('click', function(event) {
        if ($(event.target).is('.form-popup-bg-2') || $(event.target).is('#btnCloseForm')) {
          event.preventDefault();
          $(this).removeClass('is-visible');
        }
      });

      });
    </script>
<script>
    $("#loan-amounts").each((i,ele)=>{
            let clone=$(ele).clone(false)
            clone.attr("type","text")
            let ele1=$(ele)
            clone.val("₹"+Number(ele1.val()).toLocaleString("en-IN"))
            $(ele).after(clone)
            $(ele).hide()
            clone.mouseenter(()=>{

                ele1.show()
                clone.hide()
            })
            setInterval(()=>{
                let newv="₹"+Number(ele1.val()).toLocaleString("en-IN")
                if(clone.val()!=newv){
                    clone.val(newv)
                }
            },10)
            $(ele).mouseleave(()=>{
                $(clone).show()
                $(ele1).hide()
            })
        })
  </script>
  <script>
    $("#interest-rate-texts").each((i,ele)=>{
            let clone=$(ele).clone(false)
            clone.attr("type","text")
            let ele1=$(ele)
            clone.val(Number(ele1.val())+"%")
            $(ele).after(clone)
            $(ele).hide()
            clone.mouseenter(()=>{

                ele1.show()
                clone.hide()
            })
            setInterval(()=>{
                let newv=Number(ele1.val())+"%"
                if(clone.val()!=newv){
                    clone.val(newv)
                }
            },10)
            $(ele).mouseleave(()=>{
                $(clone).show()
                $(ele1).hide()
            })
        })
  </script>
  <script>
    function loanapply(){
      var fullname=$("#fullnames").val();
      var mobilenumber=$("#mobilenumbers").val();
      var pincode = $("#pincodes").val();

      var fullnameErr = mobilenumberErr = pincodeErr = true;
        // fullname
        if(fullname == "") {
            printError("fullnameErr", "");
            document.getElementById("fullnames").style.borderColor = "red";
            document.getElementById('fullnameErr').style.color = "red";
        }
        else
        {
            var regex = /^[a-zA-Z]([^0-9]*)$/; // 13 - max length is can't work just assin
            if(regex.test(fullname) === false) {
                printError("fullnameErr", "Fullname invalid");
                document.getElementById("fullnames").style.borderColor = "red";
                document.getElementById('fullnameErr').style.color = "red";
            } else{
                printError("fullnameErr", "");
                fullnameErr = false;
                document.getElementById("fullnames").style.borderColor = "";
                document.getElementById('fullnameErr').style.color = "";
            }
        }

        // mobilenumber
        if(mobilenumber == "") {
            printError("mobilenumberErr", "");
            document.getElementById("mobilenumbers").style.borderColor = "red";
            document.getElementById('mobilenumberErr').style.color = "red";
        }
        else
        {
            // {input maxlenth = 13 assin}
            var regex = /^[0-9]{10,130}([^a-zA-Z]*)$/;// 130 - max length is can't work just assin
            if(regex.test(mobilenumber) === false) {
                printError("mobilenumberErr", "Mobilenumber invalid");
                document.getElementById("mobilenumbers").style.borderColor = "red";
                document.getElementById('mobilenumberErr').style.color = "red";
            } else{
                printError("mobilenumberErr", "");
                mobilenumberErr = false;
                document.getElementById("mobilenumbers").style.borderColor = "";
                document.getElementById('mobilenumberErr').style.color = "";
            }
        }

        // pincode

        if(pincode == "") {
            printError("pincodeErr", "");
            document.getElementById("pincodes").style.borderColor = "red";
            document.getElementById('pincodeErr').style.color = "red";
        }
        else
        {
            var regex = /^[0-9]{6,130}([^a-zA-Z]*)$/;
            if(regex.test(pincode) === false) {
                printError("pincodeErr", "Pincode invalid");
                document.getElementById("pincodes").style.borderColor = "red";
                document.getElementById('pincodeErr').style.color = "red";
            } else{
                printError("pincodeErr", "");
                pincodeErr = false;
                document.getElementById("pincodes").style.borderColor = "";
                document.getElementById('pincodeErr').style.color = "";
            }
        }
        if((fullnameErr ||  mobilenumberErr || pincodeErr) == true) {
            return false;

        } else{
          $.ajax({
              headers: {
              "X-CSRF-TOKEN": "{{ csrf_token() }}",
              },
              url: "{{ route('loan_submission') }}",
              method: 'post',
              data: $('form').serialize(),
              success: function(result){
                // alert(result);
                if(result == 1){
                  $("#fullnames").val('');
                  $("#mobilenumbers").val('');
                  $("#pincodes").val('');
                  document.getElementById("btnCloseForm").click();
                  document.getElementById("btnOpenForm_2").click();
                  const div = document.getElementById('form-container_id');
                  div.innerHTML = `<button id="btnCloseForm" class="close-button">X</button><strong id="msg">Thank you for contacting APAC!!! Our team will contact you shortly.</strong> `;
                }else{
                  alert('Mobile Number Already Taken');
                }

              }
              });
        }




    }

  </script>

<script>
    for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
        e.style.setProperty('--value', e.value);
        e.style.setProperty('--min', e.min == '' ? '0' : e.min);
        e.style.setProperty('--max', e.max == '' ? '100' : e.max);
        e.addEventListener('input', () => e.style.setProperty('--value', e.value));
      }
  </script>
<script>
    window.onload = function() {
  $('#main-menu li:first-child').addClass('active');

};
</script>

<script>
    for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
        e.style.setProperty('--value', e.value);
        e.style.setProperty('--min', e.min == '' ? '0' : e.min);
        e.style.setProperty('--max', e.max == '' ? '100' : e.max);
        e.addEventListener('input', () => e.style.setProperty('--value', e.value));
      }
  </script>

<script>
    (function($) {
      $.fn.slidingCarousel = function (options) {
          options = $.extend({}, $.fn.slidingCarousel.defaults, options || {});

          var pluginData = {
              container: $(this),
              sinus:   [0],
              images:  null,
              mIndex:  null
          };

          var preload = function(callback) {
              var images = pluginData.container.find('.slide img'),
                  total  = images.length,
                  shift  = total % 2,
                  middle = total < 3 ? total : ~~(total / 2) + shift,
                  result = [],
                  loaded = 0;

              images.each(function (index, element) {
                  var img = new Image();

                  $(img).bind('load error', function () {
                      loaded++;

                      // push loaded images into regular array.
                      // to preserve the order array gets constructed so, that elements indexed:
                      //
                      //    0 1 2 3 4 5 6
                      //
                      // are shifted within destination array by half of total length (-1 depending on parity/oddness):
                      //
                      //    6 5 4 0 1 2 3
                      //
                      // and finally reversed to get correct scrolling direction.

                      result[(index+middle-shift) % total] = element;

                      // need ratio for calculating new widths
                      element.ratio = this.width / this.height;
                      element.origH = this.height;
                      element.idx   = index;

                      if (loaded == total) {
                          pluginData.mIndex = middle;
                          pluginData.sinsum = 0;
                          pluginData.images = result.reverse();

                          // prepare symetric sinus table

                          for (var n=1, freq=0; n<total; n++) {
                              pluginData.sinus[n] = (n<=middle) ? Math.sin(freq+=(1.6/middle)) : pluginData.sinus[total-n];

                              if (n < middle)
                                  pluginData.sinsum += pluginData.sinus[n]*options.squeeze;
                          }
                          callback(pluginData.images);
                      }
                  });
                  img.src = element.src;
              });
          };

          var setupCarousel = function() {
              preload(doLayout);
              setupEvents();
          };

          var setupEvents = function() {
              pluginData.container
                  .find ('.slide p > a').click(function(e) {
                      var idx = $(this).find('img')[0].idx,
                          arr = pluginData.images;

                      while (arr[pluginData.mIndex-1].idx != idx ) {
                          arr.push(arr.shift());
                      }
                      doLayout(arr, true);
                  })
                  .end()
                  .find('.navigate-right').click(function() {
                      var images = pluginData.images;

                      images.splice(0,0,images.pop());
                      doLayout(images, true);
                  })
                  .end()
                  .find('.navigate-left').click(function() {
                      var images = pluginData.images;

                      images.push(images.shift());
                      doLayout(images, true);
                  });
          };

          var doLayout = function(images, animate) {
              var mid  = pluginData.mIndex,
                  sin  = pluginData.sinus,
                  posx = 0,
                  diff = 0,
                  width  = images[mid-1].origH * images[mid-1].ratio,  /* width of middle picture */
                  middle = (pluginData.container.width() - width)/2,   /* center of middle picture, relative to container */
                  offset = middle - pluginData.sinsum,                 /* to get the center, all sinus offset that will be added below have to be substracted */
                  height = images[mid-1].origH, top, left, idx, j=1;

              // hide description before doing layout
              pluginData.container.find('span').hide().css('opacity', 0);

              $.each(images, function(i, img) {
                  idx = Math.abs(i+1-mid);
                  top = idx * 15;

                  // calculating new width and caching it for later use
                  img.cWidth = (height-(top*2)) * img.ratio;

                  diff = sin[i] * options.squeeze;
                  left = posx += (i < mid) ? diff : images[i-1].cWidth + diff - img.cWidth;

                  var el = $(img).closest('.slide'),
                      fn = function() {
                          if (i === mid-1) {
                              // show caption gently
                              el.find('span').show().animate({opacity: 0.7});
                          }
                      };

                  if (animate) {
                      el.animate({
                          height   : height - (top*2),
                          zIndex   : mid-idx,
                          top      : top,
                          left     : left+offset,
                          opacity  : i==mid-1 ? 1 : sin[j++]*0.8
                      }, options.animate, fn);
                  }
                  else
                  {
                      el.css({
                          zIndex   : mid-idx,
                          height   : height - (top*2),
                          top      : top,
                          left     : left+offset,
                          opacity  : 0
                      }).show().animate({opacity: i==mid-1 ? 1 : sin[j++]*0.8 }, fn);

                      if (options.shadow) {
                          el.addClass('shadow');
                      }
                  }
              });

              if (!animate) {
                  pluginData.container
                      .find('.navigate-left').css('left', middle+50)
                      .end()
                      .find('.navigate-right').css('left', middle+width-75);
              }
          };

          this.initialize = function () {
              setupCarousel();
          };

          // Initialize the plugin
          return this.initialize();

      };

      $.fn.slidingCarousel.defaults = {
          shadow: true,
          squeeze: 124,
          animate: 250
      };

  })(jQuery);

  </script>
  <script>
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)

        return false;
            return true;
    }
    </script>
<script>
    window.onload = function(){
        $(".menu-cnt ul li:first").addClass('active');

        var max_validation_temp = @json($emiupdate->max_amount);
    var min_validation_temp = @json($emiupdate->min_amount);
    if(max_validation_temp.length == 4 || max_validation_temp.length == 5 ){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 1).toFixed(2))/10 + "K";
    }else if(max_validation_temp.length == 6 || max_validation_temp.length == 7){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 2).toFixed(2))/10 + "L";
    }else if(max_validation_temp.length == 8 || max_validation_temp.length == 9){
      var max_validation = (@json($emiupdate->max_amount) / Math.pow(100, 1 * 3).toFixed(2))/10 + "Cr";
    }
    if(min_validation_temp.length == 4 || min_validation_temp.length == 5 ){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 1).toFixed(2))/10 + "K";
    }else if(min_validation_temp.length == 6 || min_validation_temp.length == 7){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 2).toFixed(2))/10 + "L";
    }else if(min_validation_temp.length == 8 || min_validation_temp.length == 9){
      var min_validation = (@json($emiupdate->min_amount) / Math.pow(100, 1 * 3).toFixed(2))/10 + "Cr";
    }

      $('#max_amount_hint').text(max_validation);
      $('#min_amount_hint').text(min_validation);
    }
  </script>
  <script>
    $('#branches').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toLocaleString('en'));
        }
      });
      branch++
    })
  </script>
  <script>
    $('#states').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toLocaleString('en'));
        }
      });
      branch++
    })
  </script>

<script>
    $('#employees').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toLocaleString('en'));
        }
      });
      branch++
    })
  </script>
  <script>
    $('#customers').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toLocaleString('en'));
        }
      });
      branch++
    })
  </script>
  <script>
//     $('#stable').each(function () {
//       $(this).prop('Counter', 0).animate({
//         Counter: $(this).text()
//       }, {
//         duration: 4000,
//         easing: 'swing',
//         step: function (now) {
//           $(this).text(Math.ceil(now).toLocaleString('en'));
//         }
//       });
//       branch++
//     })
//   </script>

  <script>
    $('#aum').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now).toLocaleString('en'));
        }
      });
      branch++
    })
  </script>
@endsection

