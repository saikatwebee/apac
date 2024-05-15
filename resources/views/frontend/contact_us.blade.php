@extends('layouts.frontendapp')
@section('title', 'Contact Us')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<style>
.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 70%,rgba(0,0,0,0) 100%);
}

/*.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide_bullets > button:hover, .glidebullets > button.glidebullet--active, .controls-right .glidebullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glidearrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide_arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {*/
/*    background: #cfcfcf;*/
/*}*/


.containing {
background: rgba(0,0,0,.4);
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5);
border-radius:10px;
max-width: 1170px;
margin-left: auto;
margin-right: auto;
padding: 1em;
}

div.forms {
background-color: transparent;
}


.submit-btn {
float: left;
}


.form-headline:after {
content: "";
display: block;
width: 10%;
padding-top: 10px;
border-bottom: 3px solid #ec1c24;
}

.highlight-text {
color: #ec1c24;
}

.hightlight-contact-info {
font-weight: 700;
font-size: 22px;
line-height: 1.5;
}

.highlight-text-grey {
font-weight: 500;
}

.email-info {
    margin-top: 20px;
}

::-webkit-input-placeholder { /* Chrome */
 font-family: 'Montserrat', sans-serif !important;
color: white;
font-size: 16px;
}




@media (min-width: 600px) {
.containing {
    padding: 0;
}
}

h3,
ul {
margin: 0;
}

h3 {
margin-bottom: 1rem;
}

.form-input:focus,
textarea:focus{
outline: none;
box-shadow: none !important;


}


.form-input,
textarea {
width: 100%;
border: none;
border-bottom: 1px solid white;
/* border-radius: 9px; */
color: white;
font-size: 16px;

}
.form-input{
    color: white;
    font-size: 16px;
}
.form-control:focus{
    box-shadow: none !important;
}

.wrapper_contactform > * {
padding: 1em;
}
@media (max-width: 767px) {
    #temp_slct {
        height: 300px !important;
    }
    .remv_ln_mob{
        margin-top: -1px;
    }
}
@media (min-width: 700px) {
.wrapper_contactform {
    display: grid;
    grid-template-columns: 2fr 1fr;
}
.wrapper_contactform > * {
    padding: 2em 2em;
}
}

ul {
list-style: none;
padding: 0;
}

.address-section p {
color: white;
}
.state_class,.branch_class,.pincode_class{
    background: transparent;
}



form {
/*display: grid;*/
grid-template-columns: 1fr 1fr;
/*grid-gap: 20px;*/
}
form label {
display: block;
}
form p {
margin: 0;
}

.full-width {
grid-column: 1 / 3;
}

button,
.submit-btn,
.form-input,
textarea {
padding: 1em;
}

button, .submit-btn {
background: transparent;
border: 1px solid green;
color: green;
border-radius: 15px;
padding: 5px 20px;
text-transform: uppercase;
}
button:hover, .submit-btn:hover,
button:focus , .submit-btn:focus{
background: green;
outline: 0;
color: #eee;
}
.error {
color: #ec1c24;
}



#name,#phone,#message{
    background: transparent;
}


.menu-cnt > ul > li a, .lan-menu a {
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif !important;
        }

/* #map {
height: 100px;
width: 100%;
} */
.branchdrop{
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255,255,255,.1);
    width: 100%;
    color: #fff;
    display: block;
}

#apply{
    padding: 15px 20px;
    border-radius: 25px;
}
.mb-1 {
    margin-bottom: 1.25rem!important;
}
.contact-details div{
    text-decoration: none;
    line-height: 2.5;
    color: #ec1c24
}

.btn-primary{
background: #f59c41;
border: none;
}
.state_class,.branch_class{
    color:white;
}
.hideDiv{
    background:rgba(0,0,0,.4);
	/*box-shadow: 0 15px 25px rgba(0,0,0,.5); */
    width:100%; margin-bottom: 10px; color:#fff; padding:10px; text-align:center;}

#pincode {
  padding-right: 25px;
  background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iNzUycHQiIGhlaWdodD0iNzUycHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDc1MiA3NTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiA8cGF0aCBkPSJtNTE1LjcxIDUwMS45Ny01NS44ODMtNTUuNDA2YzQxLjY3Ni00OC4zMDUgMzkuMzA5LTEyMS4yNC02LjYyODktMTY3LjE4LTIzLjY4LTI0LjE1Mi01NS40MS0zNS45OTItODYuNjY0LTM1Ljk5Mi0zMS4yNTggMC02Mi45ODQgMTEuODQtODcuMTQxIDM1Ljk5Mi00OC4zMDUgNDguMzA1LTQ4LjMwNSAxMjUuOTcgMCAxNzQuMjggMjMuNjggMjMuNjggNTUuNDEgMzUuOTkyIDg3LjE0MSAzNS45OTIgMjguNDE0IDAgNTcuMzA1LTkuOTQ1MyA4MC4wMzUtMjkuODM2bDU1Ljg4MyA1NS44ODNjMS40MTggMS40MjE5IDMuNzg1MiAyLjM2NzIgNi4xNTYyIDIuMzY3MiAyLjM2NzIgMCA0LjczNDQtMC45NDUzMSA2LjYyODktMi44Mzk4IDMuNzg5MS0zLjMxNjQgMy43ODkxLTkuNDcyNyAwLjQ3MjY2LTEzLjI2MnptLTIyMy4wNS02Mi4wMzljLTE5Ljg5MS0xOS40MTQtMzAuMzA5LTQ1LjkzOC0zMC4zMDktNzMuNDAyIDAtMjcuNDY5IDEwLjg5MS01My45ODggMzAuMzA5LTczLjg3OSAxOS44OTEtMTkuODkxIDQ1LjkzOC0zMC4zMDkgNzMuODc5LTMwLjMwOXM1My45ODggMTAuODkxIDczLjg3OSAzMC4zMDljMTkuNDE0IDE5Ljg5MSAzMC4zMDkgNDUuOTM4IDMwLjMwOSA3My44NzlzLTEwLjg5MSA1My45ODgtMzAuMzA5IDczLjg3OWMtMTkuODkxIDE5LjQxNC00Ni40MTQgMzAuMzA5LTczLjg3OSAzMC4zMDktMjcuNDY5IDAtNTMuOTg4LTEwLjg5NS03My44NzktMzAuNzg1eiIgZmlsbD0iI2ZmZiIvPgo8L3N2Zz4K") no-repeat right;
  background-size: 60px;
  color: white;
  font-family: 'Montserrat', sans-serif;
  border:2px solid #f59c41;
}
#pincodeErr{
    margin-top: 3px;
    margin-left: 4px;
    font-family: 'Montserrat', sans-serif;
}
select{
    font-family: 'Montserrat', sans-serif;
}
/* select2 */
span#select2-preferred_location-container{
    width: 100%;
    padding: 8px 0;
    font-size: 16px;
    color: #FFF;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #FFF;
    outline: none;
    background: transparent;
    border-radius: 0px !important;
  }
  span.select2-selection.select2-selection--single{
    background: transparent;
    border: none;
  }
  span.select2-results{
    outline: none;
    background: transparent;
    border-radius: 100px !important;
  }
  input.select2-search__field{
    display: none;
  }
  span.select2-dropdown.select2-dropdown--below{
    /* background: transparent; */
    border: none;
    /* color: white; */
  }
  .select2-container--default .select2-results>.select2-results__options{
    /* max-height: 150px !important; */
    max-height: 175px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b{
    margin-left: -15px;
    /*margin-top: 11px;*/
}
.select2-container{
    width: 100% !important;
}

.select2-container .select2-selection--single {
    height: 40px !important;
}
span.select2-selection.select2-selection--single{
    border: 2px solid #f59c41;
    padding: 26px;
    border-radius: 8px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered{
    color: #fff !important;
}
span#select2-state-container{
    margin: -14px !important;
}
#select2-branch-container{
    margin: -14px !important;
    font-size: 16px;
}
span.select2-selection__arrow{
    margin: 15px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b{
    border-color: #fff transparent transparent transparent !important;
}
.select2-selection__rendered{
    font-size: 16px !important;
}
/**/
#temp_slct{
    height: 100px;
}
.full-width {
	position: relative;
	margin-top: 15px;
	margin-bottom: 25px;
    }
	.floating-label {
		font-size: 16px;
		color: white;
		position: absolute;
		pointer-events: none;
		top: 10px;
		left: 0px;
		transition: all 0.1s ease;
	}

	input:focus ~ .floating-label,
	input:not(:focus):valid ~ .floating-label {
		top: -15px;
		bottom: 0px;
		left: 0px;
		font-size: 14px;
		opacity: 1;
		color: white;
	}
    textarea:focus ~ .floating-label,
	textarea:not(:focus):valid ~ .floating-label {
		top: -15px;
		bottom: 0px;
		left: 0px;
		font-size: 14px;
		opacity: 1;
		color: white;
	}
.wrapper_contactform > * {
    padding: 25px;
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
iframe {
    width: 100%;
    height: 100%;
}
</style>
@endsection

@section('mainheading', 'Contact Us')
@section('content')

<section class="section-af-bg-dark">

    <div class="container" style="padding-bottom:40px!important">
        <div class="row">


<div class="container">
<h1 class="text-white d-flex justify-content-center text-uppercase profile-image headingcentered" style="margin-top: 0px;padding-bottom: 25px;" >Contact us</h1>

                        @if (Session::has('success'))
                        <div class="hideDiv">
                            {{session::get('success')}}

                        </div>

                        @endif
<div class="containing">

    <div class="wrapper_contactform">

    <div class="forms">
        <form id="submit-form" action="{{route('form_contact_us.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
        <p class="full-width">
            <input id="name" class="form-input" name="name" type="text"   maxlength="20" required>
            <span class="floating-label">Name<span class="text-danger">*</span></span>



            <small class="name-error"></small>
            @if ($errors->has('name'))
            <p class="text-warning mt-2">{{ $errors->first('name') }}</p>
        @endif
        </p>
        <p class="full-width">
            <input name="phone" id="phone" class="form-input" type="number"  maxlength="10" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            <span class="floating-label">Mobile Number<span class="text-danger">*</span></span>

            <small></small>
            @if ($errors->has('phone'))
            <p class="text-warning mt-2">{{ $errors->first('phone') }}</p>
        @endif
        </p>
        <p class="full-width">
            <textarea   id="message" class=" from_textarea" name="message" cols="30"   required style="resize:none;"></textarea>
            <span class="floating-label">Message<span class="text-danger">*</span></span>

            <small></small>
            @if ($errors->has('message'))
                        <p class="text-warning mt-2">{{ $errors->first('message') }}</p>
                    @endif
        </p>

        <button type="submit" class="btn btn-primary w-100" id="apply" style="margin-top: 0px;">submit</button>

        </form>
    </div>


        <div class="address-section">
            <div class="firm-address mt-3 mb-2">
                <p class="m-0 mb-1 fs-6" style="font-weight: 900">APAC Financial Services Private Limited  </p>
            <p class="m-0 mb-1 fs-6" style="font-weight: 900">APAC Housing Finance Private Limited </p>
            <p class="m-0 fs-6">1st Floor, Ashford Center,
            </p>
            <p class="m-0 fs-6">Opposite Peninsula Corporate Park,
            </p>
            <p class="m-0 fs-6">Shankar Rao Naram Marg,
            </p>
            <p class="m-0 fs-6">Lower Parel West,</p>
            <p class="m-0 fs-6">Mumbai - 400 013
            </p>
            </div>
            <div class="contact-details  mb-4" >
                <div>
                    <a  href="mailto:contactus@apacfin.in"
                        class="email  text-white fw-bold d-flex align-items-center">
                        <i class="bi bi-envelope fw-bold me-2 fs-6"></i>
                        contactus@apacfin.com
                    </a>
                </div>
                <div>
                    <a href="tel:02266668169" class="phone text-white   fw-bold">
                        <i class="bi bi-telephone-fill me-2"></i>
                        022-66668169
                    </a>
                </div>
                <div>
                    <a href="tel:1800313205205" class="phone text-white  fw-bold">
                        <i class="bi bi-telephone-fill me-2"></i>
                        1800 313-205-205
                    </a>
                </div>
            </div>
            {{-- <div>
                <h3 class="follow-us" style="margin-bottom:45px"><span>Follow us on</span>
                    <a href="https://www.instagram.com/apacfin/"><i class="bi bi-instagram" style="font-size: 30px;padding:5px;"></i></a>
                    <a href="https://www.facebook.com/Apacfinancial/"><i class="bi bi-facebook" style="font-size: 30px;padding:5px;"></i></a>
                    <a href="https://www.linkedin.com/company/apac-financial-services "><i class="bi bi-linkedin" style="font-size: 30px;padding:5px;"></i></a>


                </h3>

            </div> --}}
        </div>
    </div>
</div>
</div>
        </div>
    </div>




            </div>
        </div>
    </div>
</section>


<section class="section-af-bg remv_ln_mob" id="map_section" style="background: url(media/icons/use-svg-as-background-image-particle-strokes.svg)" >
    <div class="container" style="padding-top:20px;">
        <h1 class="text-white d-flex justify-content-center text-uppercase profile-image headingcentered" >Branch Locator</h1><br>


            <div class="row"  id="temp_slct">
                <div class="col-md-4">

                        <select  class="form-input state_class" id="state" name="state">

                            <option value="0" disabled="true" selected="true">SELECT STATE</option>
                            @foreach($state_info as $state_infos)
                                <option value="{{$state_infos->id}}">{{$state_infos->state}}</option>
                            @endforeach

                        </select>
                    <br>
                </div>
                <div class="col-md-4">
                        <select  class="form-input branch_class" id="branch" name="branch">

                            <option value="0" disabled="true" selected="true">CHOOSE BRANCH</option>
                        </select>

                    <br>

                </div>
                <div class="col-md-4">

                        <input type="text" class="form-input pincode_class" name="pincode" id="pincode" placeholder="SEARCH BY PINCODE..." onkeypress="return isNumberKey(event)" maxlength="6" style="border: 2px solid #f59c41;border-radius:9px;">
                        @if ($errors->has('pincode'))
                            <p class="text-warning mt-2">{{ $errors->first('pincode') }}</p>
                        @endif
                        <p id="pincodeErr"></p>


                    <br>

                </div>


            </div>


            {{-- <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0485056447415!2d101.57993851447384!3d3.0817283544235132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5a80be90b1%3A0xf877a14712d31419!2sFINTAGS%20SDN.%20BHD.!5e0!3m2!1sen!2sin!4v1657016608130!5m2!1sen!2sin" allowfullscreen="" width="100%" height="500px"></iframe>
            </div> --}}
           <div class="row">
                <div class="col-md-4">
                    <h3 class="text-white" id="address_head" style="display:none;"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16" style="margin-bottom: -4px;"><path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path><path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg> <span id="address_head_branch" style=" text-transform: uppercase;">DAVANGERE</span>  BRANCH ADDRESS:</h3>
                    <div style="background:#f59c41; width:100%; border-radius:5px; padding:1.3rem;display:none;color: #fff;" id="address_div">



                        </div>
                    </div>
                <div class="col-md-8">
                    <div id="map" style="width:100%;height:400px;display:none;border: 10px solid white;" >
                    </div>

                    </div>
                </div>
            </div>



    <!--</div>-->

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
<script src="{{ asset('assets/js/googleaddress.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<!--<script async defer -->
<!--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUJxta1iBvsH-gLNI98FYAqylxJBC7nZw&callback=initAutocomplete&libraries=places&v=weekly"-->

<!-->-->
<!--</script>-->

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUHz-2wCX8FIB4NUJ7_rsdgobLG0DHz6g&callback=initMap&libraries=places" type="text/javascript"></script>


<script>
    $(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("select").select2();
});
</script>
<script>
    // success: function (data) {
    //                 var a = data.a;
    //                 var b = data.b;
    //                 // alert('0');
    //   showMap(res1,res2,a,b);
    //             }
    //           });
</script>

{{-- <script>
    function showMap(lat=0,long=0)
{
    // alert(parseFloat(lat));
var coord={lat:lat,lng:long};
var map=new google.maps.Map(
    document.getElementById("map"),
    {
        zoom:13,
        center:coord,
        strokeColor:'blue',
        }
    );
    new google.maps.Marker({
    position: { lat: lat, lng: long },
    map:map,
    });
}

</script> --}}
<script type="text/javascript">
    $(document).ready(function(){
        // showMap();
        $(document).on('change','.state_class',function(){
            var state_id=$(this).val();
            // var state_div=$(this).parent();
            // console.log(state_div);


            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findBranch')!!}',
                data:{'id':state_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>CHOOSE BRANCH</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].branch+'</option>';
                }

                $('.container').find('.branch_class').html(" ");
                $('.container').find('.branch_class').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.branch_class',function () {
            var branch_id=$(this).val();

            // var a=$(this).parent();
            console.log(branch_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPincode')!!}',
                data:{'id':branch_id},
                dataType:'json',//return data will be json
                success:function(data){
                    // console.log("price");
                    // console.log(data.pric);
                    // here price is coloumn name in products table data.coln name

                    $('.container').find('.pincode_class').val(data.pincode);
                    var res1 = parseFloat(data.latitude);
                    var res2 = parseFloat(data.longitude);
                    document.getElementById("map").style.display = "block";
                    document.getElementById("map").innerHTML=data.embedded;
                    document.getElementById("address_div").style.display = "block";
                    document.getElementById("address_head").style.display = "block";
                    document.getElementById("map_section").style.height = "700px !important";
                    // showMap(res1,res2);
                    $('.container').find('.branch_address').val(data.branch_address);
                    $("#address_div").text(data.branch_address);
                    $("#address_head_branch").text(data.branch);
                    // <div id="embededb" style="height:500px">
                    //     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.2160400693758!2d80.21140111381686!3d13.071780109161017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526698eba7b081%3A0xb27741f2afb5c149!2sDG%20Vaishnav%20College%20Tennis%20Court%2C%20Ambedkar%20Nagar%2C%20Arumbakkam%2C%20Chennai%2C%20Tamil%20Nadu%20600106!5e0!3m2!1sen!2sin!4v1672477594590!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    // </div>



                    // alert(data);
                },
                error:function(){

                }
            });


        });

    });
</script>


{{-- hide div for form success meeseage js --}}
<script>
    $(function() {
setTimeout(function() { $(".hideDiv").fadeOut(1500); }, 2000)

})
</script>
<script>
    $("#pincode").keyup(function(){
        $pincode = $(this).val();
        if($pincode ==""){
            document.getElementById("pincode").style.borderColor = "";
            document.getElementById("pincode").style.outline = "";
            document.getElementById("pincodeErr").innerHTML = "";
            document.getElementById("pincodeErr").style.color = "";

        }
        else if($pincode.length>=6){
            document.getElementById("pincode").style.borderColor = "";
            document.getElementById("pincode").style.outline = "";
            document.getElementById("pincodeErr").innerHTML = "";
            document.getElementById("pincodeErr").style.color = "";

            $.ajax({
                    type:'get',
                    url:'{{route('pincode_get_loc')}}',
                    data:{'pincode':$pincode},
                    dataType:'json',//return data will be json
                    success:function(data){
                        // alert(data.latitude);
                        // if(data.latitude == undefined){
                        //     document.getElementById("pincodeErr").innerHTML = "Branch is not available in this location!";
                        //     document.getElementById("pincodeErr").style.color = "#F49C41";
                        //     document.getElementById("map").style.display = "none";
                        //     document.getElementById("address_div").style.display = "none";
                        //     document.getElementById("address_head").style.display = "none";
                        // }
                        if(data == 'Oops! We are not yet present in your city'){
                            document.getElementById("address_div").style.display = "block";
                            document.getElementById("address_head").style.display = "block";
                            document.getElementById("pincodeErr").innerHTML = "Oops! We are not yet present in your city";
                            document.getElementById("pincodeErr").style.color = "#F49C41";
                            document.getElementById("map").style.display = "none";
                            document.getElementById("map").innerHTML=data.embedded;

                            document.getElementById("address_div").style.display = "none";
                            document.getElementById("address_head").style.display = "none";
                        }
                        // else if(data.latitude == undefined){
                        //     document.getElementById("pincode").style.borderColor = "";
                        //     document.getElementById("pincode").style.outline = "";
                        //     document.getElementById("pincodeErr").innerHTML = "";
                        //     document.getElementById("pincodeErr").style.color = "";
                        //     var res1 = parseFloat(data[0].latitude);
                        //     var res2 = parseFloat(data[0].longitude);

                        //     document.getElementById("map").style.display = "block";
                        //     document.getElementById("address_div").style.display = "block";
                        //     document.getElementById("address_head").style.display = "block";
                        //     document.getElementById("map_section").style.height = "700px !important";
                        //     showMap(res1,res2);
                        //     $('.container').find('.branch_address').val(data[0].branch_address);
                        //     $("#address_div").text(data[0].branch_address);
                        //     $("#address_head_branch").text(data[0].branch);
                        // }
                        
                          else if(data.pincode == undefined){
                            document.getElementById("pincode").style.borderColor = "";
                            document.getElementById("pincode").style.outline = "";
                            document.getElementById("pincodeErr").innerHTML = "Oops! We are not yet present in your city";
                            document.getElementById("pincodeErr").style.color = "#F49C41";
                            var res1 = parseFloat(data.latitude);
                            var res2 = parseFloat(data.longitude);

                            document.getElementById("map").style.display = "none";
                            document.getElementById("map").innerHTML=data.embedded;
                            document.getElementById("address_div").style.display = "none";
                            document.getElementById("address_head").style.display = "none";
                            document.getElementById("map_section").style.height = "700px !important";
                            // showMap(res1,res2);
                            $('.container').find('.branch_address').val(data.branch_address);
                            $("#address_div").text(data.branch_address);
                            $("#address_head_branch").text(data.branch);

                        }
                        else{
                            document.getElementById("pincode").style.borderColor = "";
                            document.getElementById("pincode").style.outline = "";
                            document.getElementById("pincodeErr").innerHTML = "";
                            document.getElementById("pincodeErr").style.color = "";
                            var res1 = parseFloat(data.latitude);
                            var res2 = parseFloat(data.longitude);

                            document.getElementById("map").style.display = "block";
                            document.getElementById("map").innerHTML=data.embedded;
                            document.getElementById("address_div").style.display = "block";
                            document.getElementById("address_head").style.display = "block";
                            document.getElementById("map_section").style.height = "700px !important";
                            // showMap(res1,res2);
                            $('.container').find('.branch_address').val(data.branch_address);
                            $("#address_div").text(data.branch_address);
                            $("#address_head_branch").text(data.branch);

                        }
                    }
                });
        }else{

            document.getElementById("pincodeErr").innerHTML = "Maximum Digits is 6";
            document.getElementById("pincodeErr").style.color = "#F49C41";
            document.getElementById("map").style.display = "none";
            document.getElementById("address_div").style.display = "none";
            document.getElementById("address_head").style.display = "none";

        }
    });
</script>
<script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode

    if (charCode != 46 && charCode > 31
    && (charCode < 48 || charCode > 57 ) )
        return false;
        return true;
    }
</script>
@endsection

