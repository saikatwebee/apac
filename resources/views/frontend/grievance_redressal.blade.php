@extends('layouts.frontendapp')
@section('title', 'Grievance Redressal Policy')

@section('style')

<style>
    .lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide__bullets > button:hover, .glide__bullets > button.glide__bullet--active, .controls-right .glide__bullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glide__arrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide__arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {
    background: linear-gradient(to bottom, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.15) 70%,rgba(0,0,0,0) 100%);
}
/*.lan-menu .dropdown > ul > li > a, body > nav.scroll-menu:before, .title > p:before, .title > p:after, .quote .quote-author:before, .cnt-box-info .extra-field, .glide_bullets > button:hover, .glidebullets > button.glidebullet--active, .controls-right .glidebullet, .media-box-reveal .extra-field, .media-box .caption h3:before, .bg-color, body main > section.bg-color, nav .dropdown > ul > li > a, body > header h2:after, body > header h2:before, .controls-out.arrows-left .glidearrow:hover, .menu-cnt > ul > li > ul li > a, .album-box .caption h3:after, .menu-inner li:before, .cnt-box-blog-side .blog-date, .cnt-box-blog-top .blog-date, .section-home-alpins .glide_arrow, .menu-inner:not(.menu-inner-vertical) .dropdown ul > li > a, .step-item:before, .step-item > span, .shop-menu-cnt .cart-count {*/
/*    background: #cfcfcf;*/
/*}*/

p {
    color: var(--text-theme);
    line-height: 30px;
    text-align: justify;
}
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


.grievance_paragraph1 p span{
    color:var(--text-theme);;
}



.grievance_paragraph2 p span{
    color:var(--text-theme);;
}

.grievance_paragraph3 p{
    position: relative;
    padding: 0px 1px 3px 0px;;
}
</style>
@endsection

@section('mainheading', 'GRIEVANCE REDRESSAL POLICY')
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
                    <div class="grievance_paragraph1">
                        {{-- <p>Serving customer needs satisfactorily is a top corporate priority for APAC Financial Services Private Limited (“APAC” or the “Company”). An important component of this priority is designing an efficient mechanism to address customer queries and issues. With this objective, APAC has developed this Grievance Redressal Policy (“Policy”) to develop such a mechanism for the Company’s customers. The key guiding principles of the Company’s Policy are:</p>
                        <ul  style="line-height:3;list-style: none;color:var(--text-theme);">
                            <li>Customers should be treated fairly at all times</li>
                            <li>Complaints should be dealt with efficiently and within a reasonable time frame.</li>
                            <li>Complaints raised by customers should be dealt with courteously and with the utmost respect.</li>
                            <li>APAC ’s employees should always work in good faith and without prejudice to the interests of the Company’s customers.</li>

                        </ul>
                        <p>This Policy is based on the premise that every customer has the right to register a complaint if he or she is not satisfied with the services provided by the Company or any other agencies associated with the Company. Customers can give their complaint in writing or via e-mail. The Company will review and address the grievance in accordance with this Policy and in case the customer is not satisfied with the proposed action, the customer may use other avenues for grievance redressal.</p> --}}
                        <p>{!!$grievance_info->introduction!!}</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
              <div class="accordian-item-header">
                <h4>Applicability Of The Policy</h4>
              </div>
              <div class="accordian-item-body">
                <div class="accordian-item-body-content">
                    <div class="grievance_paragraph1">
                        {{-- <p>This Policy applies to all customers of the Company. Furthermore, the Policy will also extend to cover employees and other stakeholders of APAC.

                        </p> --}}
                        <p>{!!$grievance_info->apps_of_policy!!}</p>

                    </div>
                </div>
              </div>
            </div>
            <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Process To Handle Customer Complaints/Grievances</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      {{-- <div class="grievance_paragraph2">
                        <p>All disputes / complaints arising out of the decisions of the Company’s functionaries would be heard and disposed of at least at the next higher level after it is brought to their notice. Therefore, the following 'Grievances Redressal Mechanism' is put in place.</p>
                        <p>Step 1: Branch / Place where Business is transacted Level Review</p>
                        <p>A customer should either make a written complaint addressed to the relevant Branch Manager (contact details for the Company’s branches/ places where business is transacted are on the Company’s website), call the Company at [91 22 6666 8169] during office hours (9:30 a.m. to 6:00 p.m.), or email the Company at contact us at <a href="#">complaint.apac@apacfin.com</a> with:</p>
                        <ul  style="line-height:2;list-style: none;color:var(--text-theme);">
                            <li>Account number.</li>
                            <li>Brief summary of complaint</li>
                            <li>Complete contact address/phone number of the complainant.</li>

                        </ul>
                        <p>The Branch / places where business is transacted will strive to provide an initial response to the customer’s complaint within 7 days of the complaint being lodged.</p>
                        <p>Step 2: Grievance Redressal Officer Review</p>
                        <p>In case the customer is not satisfied with the response received at Step 1, i.e. the Branch, he /she can escalate the complaint to APAC ’s Grievance Redressal Officer, whom the Company has appointed for the implementation of customer service and complaint handling. The Grievance Redressal Officer’s complete contact details are given on the following page:</p>

                        <div class="grievance_address">
                        <ul style="line-height:2;list-style: none;color:var(--text-theme);">
                            <li><b>Mr. Anand Asawa</b></li>
                            <li>Address (office): First Floor, Ashford Centre,</li>
                            <li>Shankar Rao Naram Marg,</li>
                            <li>Lower Parel - West, 400 013,</li>
                            <li>Mumbai, Maharashtra.</li>
                            <li>Email id: <a href="#">anand.asawa@apacfin.com</a></li>
                            <li> Landline No: (91) 22 6666 8169.</li>
                        </ul>
                        </div>

                        <p>The Grievance Redressal Officer can be contacted during office hours (9:30 a.m. to 5:30 p.m.) on any of the working days of the Company.

                            Once the complaint is escalated, the complaint will receive a response within 7 working days of it reaching the Grievance Redressal Officer.</p>
                            <p>Step 3: Joint Chief Executive Officer Review</p>
                            <p>In case the customer is still not satisfied with the response or has not received a response from the Company within 15 days from the date of his/her initial complaint, he/she may contact the Company’s Joint Chief Executive Officer at the email id <a href="#">ceo.apacnbfc@apacfin.com</a> or phone number (0)22 - 6666 8169 6666 8169 during office hours (9:30 a.m. to 6:00 p.m.)</p>

                      </div> --}}
                      <p>{!!$grievance_info->process_of_handle!!}</p>

                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Branch Requirements</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="grievance_paragraph1">
                      <p>{!!$grievance_info->branch_require!!}</p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Registration Of Complaints And Time Frame</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="grievance_paragraph1">
                          {{-- <p>To register complaints, customers should follow the steps mentioned above. Once the complaint has been received in writing, the company will send an initial response within 7 days. After the matter is reviewed a final response will be sent to the customer within a period of two (2) weeks and within a maximum period of four (4) weeks of receipt of such compliant/ grievance. If more information is required by the Company to resolve the complaint, the Company will appropriately inform the complainant. Once the additional information is received, the final response will be issued within 7 days of such receipt.</p>
                          <p>If the complainant is not happy with the resolution of the complaint, the complainant can escalate the matter to the Grievance Redressal Officer at the coordinates given in section 3 above. The Grievance Redressal Officer will seek to respond to the complaint within 7 days of the complaint being escalated to him / her.</p> --}}
                      <p>{!!$grievance_info->registration_of_complaint!!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Interaction With Customers</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="grievance_paragraph1">
                         {{-- <p>The Company, through various questionnaires / meetings / surveys, obtains customer feedback /suggestions for improvement in customer service. All suggestions given by the customers are duly examined and those that the Company finds acceptable are implemented.</p> --}}
                      <p>{!!$grievance_info->interaction_with_customers!!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Sensitizing Operating Staff On Handling Complaints</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="grievance_paragraph1">
                         {{-- <p>All the staff of the Company shall be adequately educated on our Grievance Redressal Policy.</p> --}}
                      <p>{!!$grievance_info->operating_staff!!}</p>

                      </div>
                  </div>
                </div>
              </div>
              <div class="accordian-item">
                <div class="accordian-item-header">
                  <h4>Escalation Of Complaint To Reserve Bank Of India</h4>
                </div>
                <div class="accordian-item-body">
                  <div class="accordian-item-body-content">
                      <div class="grievance_paragraph3">
                          {{-- <p>In case the complainant does not receive a response from the Company within reasonable time or if a customer is dissatisfied with the response received at all levels, the complainant may approach the Reserve Bank of India at the following address:</p>
                          <p>If the complaint does not receive a response from the Company within a period of 1 month or if a customer is dissatisfied with the response received at all levels, the complainant may approach the Reserve Bank of India at the following address:</p>
                          <div class="grievance_address">
                            <ul style="line-height:2;list-style: none;color:var(--text-theme);">
                                <li><b>The General Manager,</b></li>
                                <li>Reserve Bank of India,</li>
                                <li>DNBS, Mumbai Regional Office,</li>
                                <li>RBI Building,</li>
                                <li>3rd Floor, Opp. Mumbai Central Railway Station,</li>
                                <li>Mumbai-400 008.</li>
                                <li>Tel: - 022 2308 4121 / 2302 8436</li>
                                <li>Email id-<a href="#"> helpdnbs@rbi.org.in
                                </a></li>
                            </ul>
                            </div> --}}
                      <p>{!!$grievance_info->esclation_of_complaint!!}</p>


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

