@extends('layouts.frontendapp')
@section('title', 'Interest Rate Policy')

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
  padding: 20px 30px;
  line-height: 1.5;
  border-top: 1px solid #34495e;
}

.interestpolicy_paragraph1 li{
    position: relative;
    padding: 0px 1px 3px 0px;
}
.interestpolicy_paragraph1 li:after{
    content: "";
    position: absolute;
    left: -27px;
    top: 7px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    /*background: url(media/benefitss/list-icon.png);*/
    background-size: contain;
}


.interestpolicy_paragraph1 p{
    color:var(--text-theme);
    position: relative;
    padding: 0px 1px 3px 10px;
    margin-bottom: 20px;

}
.interestpolicy_paragraph1 p:after{
    content: "";
    position: absolute;
    left: -10px;
    top: 10px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    /*background: url(media/benefitss/list-icon.png);*/
    background-size: contain;
}

.interestpolicy_paragraph2 p{
    color:var(--text-theme);
    position: relative;
    padding: 0px 1px 3px 10px;
    margin-bottom: 20px;
}
.interestpolicy_paragraph2 li:after{
    content: "";
    position: absolute;
    left: -10px;
    top: 15px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    /*background: url(media/benefitss/list-icon.png);*/
    background-size: contain;
}
.interestpolicy_paragraph2 li{
    position: relative;
    padding: 0px 1px 3px 15px;
}
.interestpolicy_paragraph3 p{
    color:var(--text-theme);;
}
.interestpolicy_paragraph3 li{
    position: relative;
    padding: 0px 1px 3px 0px;
}
.interestpolicy_paragraph3 li:after{
    content: "";
    position: absolute;
    left: -27px;
    top: 8px;
    height: 16px;
    width: 16px;
    padding: 0px;
    background-repeat: no-repeat !important;
    background-position: center;
    /*background: url(media/benefitss/list-icon.png);*/
    background-size: contain;
}
.rtable {
  /*!
  // IE needs inline-block to position scrolling shadows otherwise use:
  // display: block;
  // max-width: min-content;
  */
  display: inline-block;
  vertical-align: top;
  max-width: 100%;

  overflow-x: auto;

  // optional - looks better for small cell values
  /* white-space: nowrap; */

  border-collapse: collapse;
  border-spacing: 0;
}

.rtable,
.rtable--flip tbody {
  // optional - enable iOS momentum scrolling
  -webkit-overflow-scrolling: touch;

  // scrolling shadows
  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

// change these gradients from white to your background colour if it differs
// gradient on the first cells to hide the left shadow
.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

// gradient on the last cells to hide the right shadow
.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
  background: #f2f0e6;
  color: var(--theme-primary) !important;
}
.rtable td{
    color: var(--text-theme);
}
.rtable th,
.rtable td {
  padding: 10px 12px;
  border: 1px solid #d9d7ce;
  width: 500px;
}

.rtable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.rtable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.rtable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.rtable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.rtable--flip td,
.rtable--flip th {
  display: block;
}

.rtable--flip td {
  background-image: none !important;
  // border-collapse is no longer active
  border-left: 0;
}

// border-collapse is no longer active
.rtable--flip th:not(:last-child),
.rtable--flip td:not(:last-child) {
  border-bottom: 0;
}

/*  */


.stable {
  /*!
  // IE needs inline-block to position scrolling shadows otherwise use:
  // display: block;
  // max-width: min-content;
  */
  display: inline-block;
  vertical-align: top;
  max-width: 100%;

  overflow-x: auto;

  // optional - looks better for small cell values
  /* white-space: nowrap; */

  border-collapse: collapse;
  border-spacing: 0;
}

.stable,
.stable--flip tbody {
  // optional - enable iOS momentum scrolling
  -webkit-overflow-scrolling: touch;

  // scrolling shadows
  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

// change these gradients from white to your background colour if it differs
// gradient on the first cells to hide the left shadow
.stable td:first-child,
.stable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

// gradient on the last cells to hide the right shadow
.stable td:last-child,
.stable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.stable th {
  font-size: 11px;
  text-align: left;
  text-transform: uppercase;
  background: #f2f0e6;
  color: var(--theme-primary) !important;
}
.stable td{
    color: var(--text-theme);
}
.stable th,
.stable td {
  padding: 10px 12px;
  border: 1px solid #d9d7ce;
  /* width: 500px; */
}

.stable--flip {
  display: flex;
  overflow: hidden;
  background: none;
}

.stable--flip thead {
  display: flex;
  flex-shrink: 0;
  min-width: min-content;
}

.stable--flip tbody {
  display: flex;
  position: relative;
  overflow-x: auto;
  overflow-y: hidden;
}

.stable--flip tr {
  display: flex;
  flex-direction: column;
  min-width: min-content;
  flex-shrink: 0;
}

.stable--flip td,
.stable--flip th {
  display: block;
}

.stable--flip td {
  background-image: none !important;
  // border-collapse is no longer active
  border-left: 0;
}

// border-collapse is no longer active
.stable--flip th:not(:last-child),
.stable--flip td:not(:last-child) {
  border-bottom: 0;
}

</style>
@endsection

@section('mainheading', 'INTEREST RATE POLICY')
@section('content')

<section class="section-af-bg">
    <div class="container">
        <div class="accordian">
            <div class="accordian-item">
              <div class="accordian-item-header">
                <h4>Introduction</h4>
              </div>
              <div class="accordian-item-body">
                <div class="accordian-item-body-content">
                    <div class="interestpolicy_paragraph1">
                        <p>{!! $interestratepolicy->intr !!}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
              <div class="accordian-item-header">
                <h4>Interest Rate Model</h4>
              </div>
              <div class="accordian-item-body">
                <div class="accordian-item-body-content">
                    <div class="interestpolicy_paragraph2">
                        <p>{!! $interestratepolicy->rte_md !!}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Approach For Gradation Of Risk</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="interestpolicy_paragraph3">
                          <p>{!! $interestratepolicy->ap_grd_rk !!}</p>
                        </div>


                      </div>
                  </div>
                </div>
                <div class="accordian-item">
                    <div class="accordian-item-header">
                      <h4>Communication Framework</h4>
                    </div>
                    <div class="accordian-item-body">
                      <div class="accordian-item-body-content">
                          <div class="interestpolicy_paragraph3">
                             <p>{!! $interestratepolicy->com_frm !!}</p>

                            </div>


                          </div>
                      </div>
                    </div>

                    <div class="accordian-item">
                        <div class="accordian-item-header">
                          <h4>Review/Modifications</h4>
                        </div>
                        <div class="accordian-item-body">
                          <div class="accordian-item-body-content">
                              <div class="interestpolicy_paragraph3">
                                   <p>{!! $interestratepolicy->rev_mod !!}</p>


                                </div>


                              </div>
                          </div>
                        </div>



            <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Schedule Of Charges</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="interestpolicy_paragraph4">
                            <p>{!! $interestratepolicy->sch_chr !!}</p>
                         </div>

                      </div>
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

