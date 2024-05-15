<aside class="app-navbar">
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <!--<li class="{{ Request::is('dashboard') ? 'active' : '' }}">-->
            <!--    <a href="{{ url('dashboard') }}">-->
            <!--        <i class="nav-icon ti ti-layout-grid2-alt"></i><span class="nav-title">Dashboard</span>-->
            <!--    </a>-->
            <!--</li>-->
            <!--<li class="nav-item {{ Request::is('admin/home_page')  ? 'active' : '' }}">-->
            <!--    <a href="{{route('homepage')}}">-->
            <!--        <i class="nav-icon ti ti-dropbox-alt"></i><span class="nav-title">Home Page Management</span>-->
            <!--    </a>-->

            
            <!--</li>-->

           

             <li class="{{ Request::is('admin/dashboard_page/customer_list') || Request::is('admin/dashboard_page/ application_form_list') ||Request::is('admin/dashboard_page/contact_form_list')  ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-dashboard"></i><span class="nav-title">DashBoard</span> </a>
              
              
                <ul id="hide" aria-expanded="false">
                    @if(auth()->check() && auth()->user()->email == 'test@apacfin.com' && auth()->user()->preferred_location == 'Anakapalli')
                    <div>
                        <!-- Show for Karnataka HR -->
                        <li class="{{ Request::is('admin/dashboard_page/application_form_list') ? 'active' : '' }}">
                            <a href="{{ route('dashboard_page.application_form_list') }}">Karnataka Job Applications</a>
                        </li>   
                    </div>
                    @elseif(auth()->check() && auth()->user()->email == 'andhra@apacfin.com' && auth()->user()->preferred_location == 'vgcahs')
                    <!-- For Andhra Pradesh HR -->
                    <div>
                     
                    </div>
                    @elseif(auth()->check() && auth()->user()->email == 'tamilnadu@apacfin.com' && auth()->user()->preferred_location == 'Tamil Nadu')
                    <!-- For Tamil Nadu HR -->
                    <div>
                    
                    </div>
                    @elseif(auth()->check() && auth()->user()->email == 'maharashtra@apacfin.com' && auth()->user()->preferred_location == 'Maharashtra')
                    <!-- For Maharashtra HR -->
                    <div>
                      
                    </div>
                    @elseif(auth()->check() && auth()->user()->email == 'telangana@apacfin.com' && auth()->user()->preferred_location == 'Telangana')
                    <!-- For Telangana HR -->
                    <div>
                       
                    </div>
                    @elseif(auth()->check() && auth()->user()->email == 'rajasthan@apacfin.com' && auth()->user()->preferred_location == 'Rajasthan')
                    <!-- For Rajasthan HR -->
                    <div>
                     
                    </div>
                
                @elseif(auth()->check() && auth()->user()->email == 'pavan.bogara@apacfin.com')
                <!-- For Admin -->
                <div>
            
                    <li  class="{{ Request::is('admin/dashboard_page/customer_list') ? 'active' : '' }}">
                        <a href="{{ route('dashboard_page.customer_list') }}">Customer list</a>
                    </li>
                    <li  class="{{ Request::is('admin/dashboard_page/application_form_list') ? 'active' : '' }}">
                        <a href="{{ route('dashboard_page.application_form_list') }}">Application Form</a>
                    </li>
                    <li  class="{{ Request::is('admin/dashboard_page/contact_form_list') ? 'active' : '' }}">
                        <a href="{{ route('dashboard_page.contact_form_list') }}">Contact Form</a>
                    </li>
                </ul>
              
            </li>

             

            <li class="{{ Request::is('admin/home_page')|| Request::is('admin/emiupdate') ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-home"></i><span class="nav-title">Home Management</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/home_page') ? 'active' : '' }}">
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li  class="{{ Request::is('admin/emiupdate')? 'active' : '' }}">
                        <a href="{{ route('emiupdate') }}">EMI calculation</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/about/overview*') || Request::is('admin/about/foundersdesk*')|| Request::is('admin/about/director_list*') ||Request::is('admin/about/director_create*') ||Request::is('admin/about/director_edit*') || Request::is('admin/about/team_list*') ||Request::is('admin/about/team_create*') ||Request::is('admin/about/team_edit*') ||Request::is('admin/newsroom_list*')||Request::is('admin/newsroom_create*')||Request::is('admin/newsroom_edit*')||Request::is('admin/about/team_description*')||Request::is('admin/about/overviewmultiples*')||Request::is('admin/about/overviewmultiples_create*')||Request::is('admin/about/overviewmultiples_edit*') ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-info"></i><span class="nav-title">About Management</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/about/overview*') ? 'active' : '' }}">
                        <a href="{{ route('about.overview') }}">overview</a>
                    </li>
                    <li  class="{{ Request::is('admin/about/overviewmultiples*') ? 'active' : '' }}">
                        <a href="{{ route('overviewmultiples') }}">overview multiples images</a>
                    </li>
                    <li  class="{{ Request::is('admin/about/director_list*') ||Request::is('admin/about/director_create*') ||Request::is('admin/about/director_edit*')? 'active' : '' }}">
                        <a href="{{ route('director_list') }}">Board of Directors</a>
                    </li>
                    <li  class="{{ Request::is('admin/about/team_description*') ? 'active' : '' }}">
                        <a href="{{ route('team_description') }}">Team Description and Image</a>
                    </li>
                    <li  class="{{ Request::is('admin/about/team_list*') ||Request::is('admin/about/team_create*') ||Request::is('admin/about/team_edit*')? 'active' : '' }}">
                        <a href="{{ route('team_list') }}">Management Team</a>
                    </li>
                    <li  class="{{ Request::is('admin/newsroom_list*') ||Request::is('admin/newsroom_create*')||Request::is('admin/newsroom_edit*') ? 'active' : '' }}">
                        <a href="{{ route('newsroom_list') }}">Newsroom</a>
                    </li>
                    <li  class="{{ Request::is('admin/about/foundersdesk*')  ? 'active' : '' }}">
                        <a href="{{ route('foundersdesk') }}">Founder's Desk</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/testimonial_list*')||Request::is('admin/testimonial_create*')|| Request::is('admin/testimonial_edit*') || Request::is('admin/offer_mesme*') ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-bar-chart-alt"></i><span class="nav-title">Product Management</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/testimonial_list*')||Request::is('admin/testimonial_create*')|| Request::is('admin/testimonial_edit*') ? 'active' : '' }}">
                        <a href="{{ route('testimonial_list') }}">Testimonial</a>
                    </li>
                    <li  class="{{ Request::is('admin/offer_mesme*') ? 'active' : '' }}">
                        <a href="{{ route('offer_mesme') }}">Offers MSME</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/why_join*')|| Request::is('admin/werhiring/life_apac') || Request::is('admin/werhiring/life_apac_create') || Request::is('admin/werhiring/life_apac_edit')? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-infinite"></i><span class="nav-title">We’re Hiring</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/why_join*') ? 'active' : '' }}">
                        <a href="{{ route('why_join') }}">Hiring Description and Why join APAC?</a>
                    </li>
                    <li  class="{{ Request::is('admin/werhiring/life_apac')|| Request::is('admin/werhiring/life_apac_create') || Request::is('admin/werhiring/life_apac_edit') ? 'active' : '' }}">
                        <a href="{{ route('life_apac') }}">Life @ APAC Images</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/ourpartners_common') || Request::is('admin/ourpart_com_upd') || Request::is('admin/ourpartners_annual_report') || Request::is('admin/ourpartners_annual_create') || Request::is('admin/ourpartners_annual_edit*') || Request::is('admin/ourpartners_credit_rating') || Request::is('admin/ourpartners_credit_create') || Request::is('admin/ourpartners_credit_edit*') || Request::is('admin/investor/multiples')|| Request::is('admin/investor/multiples_create') || Request::is('admin/investor/multiples_edit*')? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-files"></i><span class="nav-title">Investor Corner</span> </a>
                <ul aria-expanded="false">
                    {{--<li  class="{{ Request::is('admin/ourpartners_common') || Request::is('admin/ourpart_com_upd')? 'active' : '' }}">
                        <a href="{{ route('ourpartners_common') }}">common</a> --}}
                    </li>
                    <li  class="{{ Request::is('admin/ourpartners_annual_report')|| Request::is('admin/ourpartners_annual_create') || Request::is('admin/ourpartners_annual_edit*') ? 'active' : '' }}">
                        <a href="{{ route('ourpartners_annual_report') }}">Annual Report</a>
                    </li>
                    <li  class="{{ Request::is('admin/ourpartners_credit_rating')|| Request::is('admin/ourpartners_credit_create') || Request::is('admin/ourpartners_credit_edit*') ? 'active' : '' }}">
                        <a href="{{ route('ourpartners_credit_rating') }}">Credit Rating</a>
                    </li>
                    <li  class="{{ Request::is('admin/investor/multiples')|| Request::is('admin/investor/multiples_create') || Request::is('admin/investor/multiples_edit*') ? 'active' : '' }}">
                        <a href="{{ route('multiples') }}">Multiples</a>
                    </li>
                </ul>
            </li>
            <!--  <li class="{{ Request::is('admin/werhiring/life_apac') || Request::is('admin/werhiring/life_apac_create') || Request::is('admin/werhiring/life_apac_edit') ? 'active' : '' }}">-->
            <!--    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-files"></i><span class="nav-title">We are Hiring</span> </a>-->
            <!--    <ul aria-expanded="false">-->

            <!--        <li  class="{{ Request::is('admin/werhiring/life_apac')|| Request::is('admin/werhiring/life_apac_create') || Request::is('admin/werhiring/life_apac_edit') ? 'active' : '' }}">-->
            <!--            <a href="{{ route('life_apac') }}">Life @ Apac Images</a>-->
            <!--        </li>-->

            <!--    </ul>-->
            <!--</li>-->

            <li class="{{ Request::is('admin/branch_list') || Request::is('admin/branch_create') || Request::is('admin/branch_edit*')? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-flag"></i><span class="nav-title">Contact Us</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/branch_list') || Request::is('admin/branch_create') || Request::is('admin/branch_edit*') ? 'active' : '' }}">
                        <a href="{{ route('branch_list') }}">Branches</a>
                    </li>
                </ul>
            </li>




            <li class="{{ Request::is('admin/footer/terms-and-condition')||Request::is('admin/footer/grievance-redressal-policy')||Request::is('admin/footer/integrated-ombusman-scheme')||Request::is('admin/footer/newsletter')||Request::is('admin/footer/integratedcreate')||Request::is('admin/footer/integratededit*')||Request::is('admin/footer/newslettercreate')||Request::is('admin/footer/newsletteredit*') || Request::is('admin/footer/nachcancellation')||Request::is('admin/footer/privacypolicy') ||Request::is('admin/footer/interestratepolicy') ||Request::is('admin/footer/fairpracticecode')|| Request::is('admin/footer/compliance')||Request::is('admin/footer/compliance_create')|| Request::is('admin/footer/compliance_edit*')  ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-layout"></i><span class="nav-title">Footer Management</span> </a>
                <ul aria-expanded="false">
                    <li  class="{{ Request::is('admin/footer/nachcancellation') ? 'active' : '' }}">
                        <a href="{{ route('footer/nachcancellation') }}">Nach Cancellation</a>
                    </li>
                    <li  class="{{ Request::is('admin/footer/privacypolicy') ? 'active' : '' }}">
                        <a href="{{ route('footer/privacypolicy') }}">Privacy Policy</a>
                    </li>
                    {{-- <li  class="{{ Request::is('admin/footer/interestratepolicy') ? 'active' : '' }}">
                        <a href="{{ route('footer/interestratepolicy') }}">Interest Rate Policy</a>
                    </li> --}}
                    {{-- <li  class="{{ Request::is('admin/footer/fairpracticecode') ? 'active' : '' }}">
                        <a href="{{ route('footer/fairpracticecode') }}">Fair Practice Code </a>
                    </li> --}}

                    <li class="{{ Request::is('admin/footer/compliance') || Request::is('admin/footer/compliance_create')|| Request::is('admin/footer/compliance_edit*')||Request::is('admin/footer/integrated-ombusman-scheme')|| Request::is('admin/footer/integratedcreate')||Request::is('admin/footer/integratededit*')||Request::is('admin/footer/interestratepolicy') ||Request::is('admin/footer/fairpracticecode') ? 'active' : ''}}">
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><span class="nav-title">Compliance</span> </a>
                        <ul aria-expanded="false">
                            <li  class="{{ Request::is('admin/footer/compliance') || Request::is('admin/footer/compliance_create')|| Request::is('admin/footer/compliance_edit*') ? 'active' : '' }}">
                                <a href="{{ route('footer/compliance') }}">Compliance Description</a>
                            </li>
                            <li  class="{{ Request::is('admin/footer/fairpracticecode') ? 'active' : '' }}">
                                <a href="{{ route('footer/fairpracticecode') }}">Fair Practice Code </a>
                            </li>
                            <li  class="{{ Request::is('admin/footer/interestratepolicy') ? 'active' : '' }}">
                                <a href="{{ route('footer/interestratepolicy') }}">Interest Rate Policy</a>
                            </li>
                            <li  class="{{ Request::is('admin/footer/integrated-ombusman-scheme')||Request::is('admin/footer/integratededit*') ? 'active' : '' }}">
                                <a href="{{ route('footer/integrated_ombusman_scheme') }}">Integrated Ombusman Scheme 2021</a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li  class="{{ Request::is('admin/footer/compliance') || Request::is('admin/footer/compliance_create')|| Request::is('admin/footer/compliance_edit*') ? 'active' : '' }}">
                        <a href="{{ route('footer/compliance') }}">Compliance </a>
                    </li> --}}
                    <li  class="{{ Request::is('admin/footer/terms-and-condition') ? 'active' : '' }}">
                        <a href="{{ route('footer/terms_and_condition') }}">Terms and condition</a>
                    </li>
                    <li  class="{{ Request::is('admin/footer/grievance-redressal-policy') ? 'active' : '' }}">
                        <a href="{{ route('footer/grievance_redressal_policy') }}">Grievance Redressal Policy</a>
                    </li>
                    {{-- <li  class="{{ Request::is('admin/footer/integrated-ombusman-scheme') ? 'active' : '' }}">
                        <a href="{{ route('footer/integrated_ombusman_scheme') }}">Integrated Ombusman Scheme 2021</a>
                    </li> --}}
                    <li  class="{{ Request::is('admin/footer/newsletter') ? 'active' : '' }}">
                        <a href="{{ route('footer/newsletter') }}">Newsletter</a>
                    </li>
                </ul>
            </li>

        </ul>
        </div>
        @else
    <!-- Show something else for users dont have the permission to access-->

    <div>
        
    </div>

            @endif
    </div>
</aside>




