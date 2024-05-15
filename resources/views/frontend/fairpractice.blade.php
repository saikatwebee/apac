@extends('layouts.frontendapp')
@section('title', 'Fair Practice Code')

@section('style')
<style>
  .lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 70%,rgba(0,0,0,0) 100%);
}

/*.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide_bullets > button:hover, .glidebullets > button.glidebullet--active, .controls-right .glidebullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glidearrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide_arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {*/
/*    background: #cfcfcf;*/
/*}*/


@import url("https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");

.accordian {
  width: 90%;
  max-width: 1000px;
  margin: 2rem auto;
}

.accordian-item {
  background-color: white;
  color: #111;
  margin: 1rem 0;
  border-radius: 0.5rem;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
}
.accordian-item-header h4{
    font-size: 20px;
    color: var(--theme-primary) !important;

}
.accordian-item-header {
  padding: 0.5rem 3rem 0.5rem 1rem;
  min-height: 3.5rem;
  line-height: 1.25rem;
  display: flex;
  align-items: center;
  position: relative;
  cursor: pointer;
}

.accordian-item-header::after {
  content: "\002B";
  font-size: 2rem;
  font-weight: bold;
  position: absolute;
  right: 1rem;
  /* transition: all 0.2s ease; */
}

.accordian-item-header.active::after {
  content: "\2212";
}

.accordian-item-body {
  max-height: 0;
  overflow: auto;
  background: var(--theme-bg-primary);
  transition: max-height 0.2s ease-out;
}

.accordian-item-body-content {
  padding: 1rem;
  line-height: 1.5;
  border-top: 1px solid #34495e;
}


.fairpractice_paragraph1 li{
    position: relative;
    padding: 0px 1px 3px 0px;

}
.fairpractice_paragraph1 p span{
    color:var(--text-theme);;
}

.fairpractice_paragraph1 li:after{
    content: "";
    position: absolute;
    left: -27px;
    top: 8px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    background: url(media/benefitss/list-icon.png);
    background-size: contain;
}
.fairpractice_paragraph2 li{
    position: relative;
    padding: 0px 1px 3px 0px;;
    list-style: none;
}
.fairpractice_paragraph2 li:after{
    content: "";
    position: absolute;
    left: -27px;
    top: 10px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    background: url(media/benefitss/list-icon.png);
    background-size: contain;
}
.fairpractice_paragraph2 p span{
    color:var(--text-theme);;
}
.fairpractice_paragraph3 li{
    position: relative;
    padding: 0px 1px 3px 0px;;
    list-style: none;
}
.fairpractice_paragraph3 p{
    position: relative;
    padding: 0px 1px 3px 0px;;
}
</style>
@endsection

@section('mainheading', 'FAIR PRACTICE CODE')
@section('content')
<section class="section-af-bg">
    <div class="container">
        <div class="accordian">
            <div class="accordian-item">
              <div class="accordian-item-header">
                <h4>Fair Practices Code</h4>
              </div>
              <div class="accordian-item-body">
                <div class="accordian-item-body-content">
                    <div class="fairpractice_paragraph1">
                        <p>{!! $fairpracticecode->fr_prt_cd !!}</p>

                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
              <div class="accordian-item-header">
                <h4>Objectives Of The Code</h4>
              </div>
              <div class="accordian-item-body">
                <div class="accordian-item-body-content">
                    <div class="fairpractice_paragraph1">
                            <p>{!! $fairpracticecode->ob_cd !!}</p>

                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Key Commitments</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                          <p>{!! $fairpracticecode->ky_com !!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Applications For Loans And Their Processing</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                            <p>{!! $fairpracticecode->ap_ln_pr !!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Loan Appraisal And Terms/Conditions</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                        <p>{!! $fairpracticecode->ln_ap_cd !!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Disbursement Of Loans Including Changes In Terms And Conditions</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                        <p>{!! $fairpracticecode->db_ln_tc !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Applicant With Disability (Ies)</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                        <p>{!! $fairpracticecode->ap_dl_ie !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>General</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                        <p>{!! $fairpracticecode->genr !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Responsibility Of Board Of Directors Towards An Effective Grievance Redressal Mechanism</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                          <p>{!! $fairpracticecode->rp_br_efrm !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Review Of The Fair Practices Code</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                          <p>{!! $fairpracticecode->rv_fr_cd !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Force Majeure</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                          <p>{!! $fairpracticecode->frc_maj !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Outsourcing</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                         <p>{!! $fairpracticecode->outs !!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Grievances Redressal Mechanism</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="fairpractice_paragraph1">
                           <p>{!! $fairpracticecode->gr_rd_mc !!}</p>
                      </div>
                  </div>
                </div>
              </div>



          </div>
    </div>

</section>

@endsection
@section('scripts')
    <script>
 const accordianItemHeaders = document.querySelectorAll(
  ".accordian-item-header"
);

accordianItemHeaders.forEach(accordianItemHeader => {
  accordianItemHeader.addEventListener("click", () => {
    const current = document.querySelector(".accordian-item-header.active");

    if (current && current !== accordianItemHeader) {
      current.classList.toggle("active");
      current.nextElementSibling.style.maxHeight = 0;
    }
    accordianItemHeader.classList.toggle("active");

    const accordianItemBody = accordianItemHeader.nextElementSibling;

    if (accordianItemHeader.classList.contains("active")) {
      accordianItemBody.style.maxHeight = accordianItemBody.scrollHeight + "px";
    } else {
      accordianItemBody.style.maxHeight = 0;
    }
  });
});

    </script>
@endsection

