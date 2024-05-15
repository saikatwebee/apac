@extends('layouts.frontendapp')
@section('title', "we're-hiring | ApacFin")

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="themekit/css/we_are_hiring.css">

<style>

    span#select2-states-container {
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

.select_state{
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

.select2-container--default .select2-selection--single .select2-selection__rendered{
    color: #fff !important;
}

.light .dropdown>ul>li:not(:hover)>a {
    white-space: nowrap;
}

.follow-us span{
    font-size:18.72px;
    font-weight:700;
    font-family: 'Montserrat', sans-serif;
}

    body{
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
    }
    .card{
        --bs-card-border-width: 0px !important;
    }
    .carousel-inner{
        margin-left: -12px;
    }    
    
    @media (min-width: 1200px){
        .container {
            /*max-width: 1266px;*/
             max-width: 1310px !important; 
        }
    }
    .box{

    /*top: 58% !important; */
    /*top: 200px !important;*/
    }
    .box .inputBox label {
    transition: none !important; 
     animation:  none !important; 
}
  @media (max-width: 575px){
      .remv_ln_mob{
        margin-top: -1px;
    }
  }
  
  
  .carousel-control-next-icon, .carousel-control-prev-icon {
    content: "\f053";
	   color: #fff;
        height: 40px;
	  width: 40px;
 		 display: flex;
	 align-items: center;
	 justify-content: center;
	 background: #F49D43;  border-radius: 50%;
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: 100% 100%;

}
 .carousel-control-prev-icon  {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}
.carousel-control-next-icon {

    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}
.carousel-control-prev{
    opacity: 10;

}
.carousel-control-next {
    opacity: 10;
    right: -12px;

}
.bg-transparent {
     width: 35px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
    margin-left: -15px;
    margin-top: -13px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    height: 0px;
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
 .carousel-item {
      -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform 2ms ease-in-out;
 }
</style>
@endsection

@section('mainheading', "we're-hiring")
@section('content')
    <button id="btnOpenForm_2" hidden></button>
    <div class="form-popup-bg-2">
        <div class="form-container_2" id="form-container_id">
        
        </div>
    </div>
    <section class="section-af-bg-dark ">
        <div class="container text-white" >
            <h1 class="text-uppercase text-white" style="display: flex;margin-top: 46px;text-align: center;white-space: nowrap;font-size: 35px;font-weight: bold;justify-content: center;" id="join_our">
                Join our ground-breaking & innovative team today
            </h1>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <p style=" font-size: 16px;
                    line-height: 1.8 !important;
                    word-spacing: 4px !important;
                    text-align: justify;
                    font-family: 'Montserrat', sans-serif;margin-top: 15px;"> 
                      
 
                     {!!$whyjoin->hiring_desc!!}

                    </p>
                   
                </div>
                <div class="col-lg-8 col-md-12 col-12" id="form_resp">
            @if (Session::has('msg')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
            <strong>{{session::get('msg')}}</strong> 
            </div>
            @endif 
            <div class="box">
                <form action="" autocomplete="off" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">

                            <div class="inputBox">
                                <input type="text" name="username" id="username" required="" onKeyPress="return ValidateAlpha(event);">
                                <label for="" id="lable_user" >Name <span class="text-danger">*</span></label>
                            </div>

                            <div class="inputBox">
                                <input type="text" name="email" id="email" required="">
                                <label for="" id="lable_email">Email <span class="text-danger">*</span></label>
                            </div>

                            <div class="inputBox">
                                <input type="number" name="mobile_number" id="mobile_number" required="" onkeypress="return isNumberKey(event)" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="" id="lable_mob">Mobile Number <span class="text-danger">*</span></label>
                            </div>

                            <div class="inputBox">

                            <!-- <select name="yrs_exp" id="yrs_exp" required>
                            <option value="">Select Years of Experience</option>
                            @for ($i = 0; $i <= 50; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                            </select>
                            <label for="yrs_exp" id="label_yrs">Years of Experience<span class="text-danger">*</span></label> -->


                                <input type="number" name="yrs_exp" id="yrs_exp" required="" onKeyPress="return isNumberKey(event)" maxlength="2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                <label for="" id="lable_yrs">Years of Experience<span class="text-danger">*</span></label><br>
                               
                            </div>

                            <div class="inputBox">
                                <input type="text" name="current_organization" id="current_organization" required="" onKeyPress="return ValidateAlpha(event);">
                                <label for="" id="lable_org" >Current Organization <span class="text-danger">*</span></label>
                            </div>


                            <!--<div class="inputBox">
                                <input type="text" name="current_organization" id="current_organization" required onkeypress="return ValidateAlpha(event);">
                                <label for="" id="lable_org">Current Organization <span class="text-danger">*</span></label>
                            </div>-->
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            
                            <div class="inputBox">
                                <input type="text" name="current_designation" id="current_designation" required="" onKeyPress="return ValidateAlpha(event);">
                                <label for="" id="lable_Desg">Current Designation <span class="text-danger">*</span></label>
                            </div>
                             
                            

                            <label for="" id="states">Select state <span class="text-danger">*</span>
                            </label>
                            <select class="form-control ester" id="states" name="states"  style="border-bottom-width: 1px !important;" onchange="getstate(event)">
                            <option value="" disabled="true" selected="true" ></option>

                            @foreach($states as $states)
                                <option value="{{$states->id}}">{{$states->state}}</option>
                            @endforeach
                                <!-- <option value="state1">Karnataka</option>
                                <option value="state2">Rajasthan</option>
                                <option value="state3">Maharashtra</option>
                                <option value="state4">Tamil Nadu</option>
                                <option value="state5">Andhra Pradesh</option>
                                <option value="state6">Telangana</option> -->
                                </select>

                                <label for="" id="lable_prflc" style="margin-top:15px !important;" >Select Preferred Location <span class="text-danger">*</span></label>

                            <select class="form-control ester" id="preferred_location" name="preferred_locationing">
                             
                            <option value="0" disabled="true" selected="true"></option>
                        
                            
                               
                            <!-- @foreach($branch_information as $branch_informations)
                                <option value="{{$branch_informations->branch}}">{{$branch_informations->branch}}</option>
                            @endforeach -->
                            </select>
                                    

                                <label for="file" style="margin-top: 25px;">Choose a file to upload:</label>
                                <input type="file" id="file" name="fileUpload" accept=".jpg, .jpeg, .png, .pdf">
                                

                            


                                <!-- <br><br>
                                <input type="submit" value="Submit">     -->

                            <div class="coin" id="apply_row" style="margin-top:15px !important;">
                                <button type="button" class="btn btn-primary w-100 " id="apply" onclick="loanapply()" > Apply</button>
                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-md-12 text-center" id="apply_row" style="padding-top:20px;">
                        <button type="button" class="btn btn-primary w-100 " id="apply" onclick="loanapply()"> Apply</button>
                    </div> --}}

                </form>
            </div>
              </div>
            </div>
            
        </div>
    </section>
    <section class="section-af-bg remv_ln_mob"  style="background: url(media/icons/use-svg-as-background-image-particle-strokes.svg);">
        <div class="container" style="padding-top:0px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 current-openings ">
                <div class="content">
                    <h1 class="text-uppercase text-white" style="display: flex;margin-top: 46px;text-align: center;font-size: 35px;font-weight: bold;justify-content: center;margin-bottom: 20px;">
                        SEARCH FOR A JOB AT APAC
                     </h1>
                </div>
                <div class="cta">
                        <iframe src="https://apacfinancial.darwinbox.in/ms/candidate/careers" width="100%" height="1200" style="border:none;display:none;" class="ifrm">
                        </iframe>

                </div>
            </div>
        </div>
    </section>
      
      <section class="section-af-bg-dark remv_ln_mob" style="padding-right: 12px;">

            <h1 class="text-uppercase text-white" style="display: flex;margin-top: 46px;text-align: center;font-size: 35px;font-weight: bold;justify-content: center;margin-bottom: 20px;" >LIFE @ APAC</h1>
            <div class="row mx-auto my-auto justify-content-center" style="margin-bottom: 50px ! important;">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                @foreach ($life_apac as $key=> $column)

                        <div class="carousel-item {{$key == 0 ? 'active' : '' }} ">
                            <div class="col-md-4" style="position: relative;left:8px;">
                                <div class="card">
                                    <div class="card-img" style="height: 350px;width:113%;">
                                        <img src="{{ asset('hiring/'.$column->apac_image) }}" class="img-fluid" style="height: 350px;width:113%;object-fit: cover;" >
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach


                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

    </section>
    
    
    <section class="section-af-bg remv_ln_mob" style="background: url(media/icons/use-svg-as-background-image-particle-strokes.svg);">
  
    <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="col-12 why_apac">
            <h1 class="text-uppercase text-white" style="display: flex;margin-top: 46px;text-align: center;font-size: 35px;font-weight: bold;justify-content: center;margin-bottom: 20px;" >Why Join APAC?</h1>
        </div>
        <div class="row mb-5 apac-benefits">

            <div class="col-lg-12 col-md-9 col-sm-8 col-12 benfitssme">
                <div class="d-flex justify-content-evenly  benefits rounded section-af-bg-dark light flex-wrap" style="background: #192643">
                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos1) }}"
                                alt="Disbursal within hours" class="img-responsive">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point1}}</p>
                        </div>
                    </div>
                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos2) }}"
                                alt="Disbursal within hours" class="img-responsive">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point2}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                                class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos3) }}" style="margin-left: 6px;"
                            alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point3}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos4) }}"
                                alt="Disbursal within hours" class="img-responsive">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point4}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                                class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos5) }}"
                                    alt="Disbursal within hours" class="img-responsive">
                            </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point5}}</p>
                        </div>
                    </div>

                    <div class="item text-center pos-relative py-3 px-4 mb-sm-3">
                        <div class="icon">
                            <div
                            class="img-container bg-white d-flex align-items-center justify-content-center p-2">
                            <img src="{{ asset('whyjoin_icons/'.$whyjoin->whyjoin_logos6) }}"
                                alt="Disbursal within hours" class="img-responsive" style="margin-bottom: 6px;">
                        </div>
                        </div>
                        <div class="beneft py-3 mt-lg-3">
                            <p class="text-white">{{$whyjoin->point6}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
  </section>
    <section class="section-base">
        <div class="container py-4" style="padding-top: 25px !important;
    padding-bottom: 17px !important;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center text-uppercase text-theme-primary fs-2" style="font-weight: bold;">Think MSME, Think APAC</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
        //change selectboxes to selectize mode to be searchable
           $("select").select2();
        });
    </script>
    <script>
        let items = document.querySelectorAll('.carousel .carousel-item');
        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

    </script>
    
    <script>
        function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
        }
        function printErrored(elemId, hintMsg) {
             const selectElement = document.querySelector("select");
                selectElement.children[0].textContent = "Select here";
        }
        function loanapply(){
          var username=$("#username").val();
          var email=$("#email").val();
          var mobile_number=$("#mobile_number").val();
          var current_organization=$("#current_organization").val();
          var current_designation=$("#current_designation").val();
          var preferred_location=$("#preferred_location").val();
          var states=$("#states").val();  
        //   var yrs_of_exp=$("#yrs_exp_error").val();
          var yrs_exp=$("#yrs_exp").val();
          var file=$("#file").val();
         
        // alert();
          var lable_user  = lable_email = lable_mob =  lable_prflc = true;
            // username
            if(username == "") {
                printError("lable_user", "Enter Your Name");
                document.getElementById("username").style.borderColor = "red";
                document.getElementById('lable_user').style.color = "red";
                document.getElementById("username").focus();

            }
            else
            {
                printError("lable_user", "Name");
                lable_user = false;
                document.getElementById("username").style.borderColor = "";
                document.getElementById('lable_user').style.color = "";

            }
            
            // if(username == "") {
            //     printError("preferred_locationing", "Select Preferred Location");
            //     document.getElementById("preferred_locationing").style.borderColor = "red";
            //     document.getElementById('preferred_locationing').style.color = "red";
            //     document.getElementById("preferred_locationing").focus();

            // }
            // else
            // {
            //     printError("preferred_locationing", "Name");
            //     lable_user = false;
            //     document.getElementById("preferred_location").style.borderColor = "";
            //     document.getElementById('preferred_location').style.color = "";

            // }
            // email
            if(email == "") {
                printError("lable_email", "Enter Your Email");
                document.getElementById("email").style.borderColor = "red";
                document.getElementById('lable_email').style.color = "red";
            }
            else
            {
                var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if(regex.test(email) === false) {
                printError("lable_email", "Invalid Email");
                document.getElementById("email").style.borderColor = "red";
                document.getElementById('lable_email').style.color = "red";
                } else{
                    printError("lable_email", "Email");
                    lable_email = false;
                    document.getElementById("email").style.borderColor = "";
                    document.getElementById('lable_email').style.color = "";
                }
            }

            // mobile_number
            if(mobile_number == "") {
                printError("lable_mob", "Enter Your Mobile Number");
                document.getElementById("mobile_number").style.borderColor = "red";
                document.getElementById('lable_mob').style.color = "red";
            }
            else
            {
                var regex = /^[0-9]{10,130}([^a-zA-Z]*)$/;// 130 - max length is can't work just assin
                if(regex.test(mobile_number) === false) {
                    printError("lable_mob", "Invalid Number");
                    document.getElementById("mobile_number").style.borderColor = "red";
                    document.getElementById('lable_mob').style.color = "red";
                } else{
                printError("lable_mob", "Mobile Number");
                lable_mob = false;
                document.getElementById("mobile_number").style.borderColor = "";
                document.getElementById('lable_mob').style.color = "";
                }
            }
            // current_organization
            if(current_organization == "") {
                printError("lable_org", "Enter Your Current Organization");
                document.getElementById("current_organization").style.borderColor = "red";
                document.getElementById('lable_org').style.color = "red";
            }
            else
            {
                printError("lable_org", "Current Organization");
                lable_org = false;
                document.getElementById("current_organization").style.borderColor = "";
                document.getElementById('lable_org').style.color = "";
            }
    
            // current_designation
            if(current_designation == "") {
                printError("lable_Desg", "Enter Your Current Designation");
                document.getElementById("current_designation").style.borderColor = "red";
                document.getElementById('lable_Desg').style.color = "red";
            }
            else
            {
                printError("lable_Desg", "Current Designation");
                lable_Desg = false;
                document.getElementById("current_designation").style.borderColor = "";
                document.getElementById('lable_Desg').style.color = "";
            }
    
            // preferred_location
            if(preferred_location < 1) {
                document.getElementById("select2-preferred_location-container").style.borderColor = "red";
                document.getElementById("select2-preferred_location-container").style.color = "red";
            }
            else
            {
                lable_prflc = false;
                document.getElementById("select2-preferred_location-container").style.color = "";
                document.getElementById("select2-preferred_location-container").style.borderColor = "";
            }

            // states
            // if(states < 1) {
            //     document.getElementById("select2-states-container").style.borderColor = "red";
            //     document.getElementById("select2-states-container").style.color = "red";
            // }
            // else
            // {
            //     lable_states = false;
            //     document.getElementById("select2-states-container").style.color = "";
            //     document.getElementById("select2-states-container").style.borderColor = "";
            // }

            // years of exp

            if(yrs_exp == "") {
                printError("lable_yrs", "Enter Your Experience");
                document.getElementById("yrs_exp").style.borderColor = "red";
                document.getElementById('lable_yrs').style.color = "red";
                document.getElementById("yrs_exp").focus();
            }
            else
            {
                printError("lable_yrs", "Years of Experience");
                lable_yrs = false;
                document.getElementById("yrs_exp").style.borderColor = "";
                document.getElementById('lable_yrs').style.color = "";
            }
           
            
            if((lable_user || lable_email || lable_mob ||  lable_prflc || lable_yrs)== true) {
                alert('Please fill the mandatory fields.');
                return false;
    
            } else{
                $.ajax({
              headers: {
              "X-CSRF-TOKEN": "{{ csrf_token() }}",
              },
              url: "{{ route('career_job') }}",
              method: 'post',
              processData: false,
              contentType: false,
            //   data: $('form').serialize()
            data : new FormData($('form')[0]),
              success: function(result){
                  if(result == 1){
                    document.getElementById("btnOpenForm_2").click();
                  const div = document.getElementById('form-container_id');
                  div.innerHTML = `<button id="btnCloseForm" class="close-button">X</button><strong id="msg">Your Application is Submitted Successfully!</strong> `;
                  setTimeout(function(){
                    location.reload();
                }, 3000);
                }else if(result == 2){
                    alert('Mobile number already taken');
                }
    
              }
              });
            }
        }

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
      // $('.form-container_2').text('<h2 class=emi_tle   pt-3 d-flex justify-content-center">Min - Amount : 3.5lahk <br><br>Max - Amount : 2crore</h2>');
      // const div = document.getElementById('form-container_id');
      // div.innerHTML = `<h2 class="emi_tle   pt-3 d-flex justify-content-center">Min - Amount : 3.5lahk <br><br>Max - Amount : 2crore</h2>`;

      
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
        function isNumberKey(evt){  <!--Function to accept only numeric values-->
    //var e = evt || window.event;
	var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode != 46 && charCode > 31 
	&& (charCode < 48 || charCode > 57))
        return false;
        return true;
	}
		   
    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
    </script>
    
     <script>
$(document).ready(function(){
  $(window).scroll(function(){
    $(".section").each(function(){
      var x = $(window).scrollTop() + $(window).height();
      var y = $(this).offset().top + ($(this).height() / 2);

      if (x >= y) {
        $(this).addClass('active');
      };
    });
    $(".ifrm").each(function(){
      var x = $(window).scrollTop() + $(window).height();
      var y = $(this).offset().top + ($(this).height() / 2);
      if (x >= y) {
        $(this).css("display", "block");
      };
    });
    $(".section1").each(function(){
      var x = $(window).scrollTop() + $(window).height();
      var y = $(this).offset().top + ($(this).height() / 2);

      if (x >= y) {
        $(this).addClass('active1');
      };
    });
    $(".section2").each(function(){
      var x = $(window).scrollTop() + $(window).height();
      var y = $(this).offset().top + ($(this).height() / 2);

      if (x >= y) {
        $(this).addClass('active2');
      };
    });
    $(".section3").each(function(){
      var x = $(window).scrollTop() + $(window).height();
      var y = $(this).offset().top + ($(this).height() / 2);

      if (x >= y) {
        $(this).addClass('active3');
      };
    });
  });
});
    </script>
    <script>
    window.onload = function () {
      jQuery('body').css({'overflow': 'auto', 'position': 'static'});
      window.scrollTo(0, 0);
    };
</script>



<script> let storageSupported = false; try { storageSupported = (window.localStorage && true) } catch (e) { }
if (!storageSupported) {
  Object.defineProperty(window, 'localStorage', {value: {
    _data       : {},
    setItem     : function(id, val) { return this._data[id] = String(val); },
    getItem     : function(id) { return this._data.hasOwnProperty(id) ? this._data[id] : undefined; },
    removeItem  : function(id) { return delete this._data[id]; },
    clear       : function() { return this._data = {}; }
  } });
  Object.defineProperty(window, 'sessionStorage', {value: {
    _data       : {},
    setItem     : function(id, val) { return this._data[id] = String(val); },
    getItem     : function(id) { return this._data.hasOwnProperty(id) ? this._data[id] : undefined; },
    removeItem  : function(id) { return delete this._data[id]; },
    clear       : function() { return this._data = {}; }
  } });	
}
 //

 
function getstate(event) {
    console.log("Selected stateId", event.target.value);
    var stateId = event.target.value;

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        type: 'get',
        url: '{!!URL::to('findBranch')!!}',
        data: { 'id': stateId },
        success: function (data) {
            console.log("Fetched data:", data); 

            var op = '<option value="" selected disabled>Choose Location</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option value="' + data[i].id + '">' + data[i].branch + '</option>';
            }
                $('.container').find('#preferred_location').html(" ");
                $('.container').find('#preferred_location').append(op);

            // var preferredLocationDropdown = $('#preferred_location');

            // Destroy and reinitialize Select2
            // preferredLocationDropdown.empty().append(op).val(null).trigger('change');
            // preferredLocationDropdown.select2();
        },
        error: function (error) {
            console.error("Error fetching data:", error); // Debugging
        }
    });
}


</script>
@endsection


