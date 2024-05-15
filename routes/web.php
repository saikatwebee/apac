<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });






Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class,'home_intro'])->name('home_intro');
Route::post('/form_home/create',[App\Http\Controllers\HomeController::class,'home_intro_create'])->name('home_intro.create');
Route::post('/form_home/formone',[App\Http\Controllers\HomeController::class,'home_intro_formone'])->name('home_intro.store_home_intro_formone');
Route::post('/form_home/formtwo',[App\Http\Controllers\HomeController::class,'home_intro_formtwo'])->name('home_intro.store_formtwo');
Route::post('/form_home/formthree',[App\Http\Controllers\HomeController::class,'home_intro_formthree'])->name('home_intro.store_formthree');
Route::post('/form_home/formfour',[App\Http\Controllers\HomeController::class,'home_intro_formfour'])->name('home_intro.store_formfour');
// loan model form submisiion
Route::post('loan_submission',[App\Http\Controllers\HomeController::class,'loan_submission'])->name('loan_submission');

// 
Route::get('contact_us',[App\Http\Controllers\HomeController::class,'contact_us'])->name('contact_us');
Route::get('about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('overview',[App\Http\Controllers\HomeController::class,'overview'])->name('overview');
Route::get('founderdesk',[App\Http\Controllers\HomeController::class,'founderdesk'])->name('founderdesk');

Route::get('products',[App\Http\Controllers\HomeController::class,'products'])->name('products');

Route::get('/contact_us',[App\Http\Controllers\HomeController::class,'contact_us'])->name('contact_us');
Route::get('contact_us/fetch',[App\Http\Controllers\HomeController::class,'contact_us_fetch'])->name('contact_us.fetch');
Route::get('/findBranch',[App\Http\Controllers\HomeController::class,'branches'])->name('contact_us.branch');
Route::get('/findPincode',[App\Http\Controllers\HomeController::class,'findPincode'])->name('contact_us.pincode');
Route::post('form_contact_us/create',[App\Http\Controllers\HomeController::class,'contact_us_form_create'])->name('form_contact_us.create');
Route::post('form_contact_us/store',[App\Http\Controllers\HomeController::class,'contact_us_form_store'])->name('form_contact_us.store');
Route::get('pincode_get_loc',[App\Http\Controllers\HomeController::class,'pincode_get_loc'])->name('pincode_get_loc');



///ABOUT SUBMENU//
Route::get('team',[App\Http\Controllers\HomeController::class,'team'])->name('team');

Route::get('we-are-hiring',[App\Http\Controllers\HomeController::class,'we_are_hiring'])->name('we_are_hiring');
Route::post('career_job',[App\Http\Controllers\HomeController::class,'career_job'])->name('career_job');

// Route::post('getLocationByStateId',[App\Http\Controllers\HomeController::class,'getLocationByStateId'])->name('getLocationByStateId');

Route::get('Investor-corner',[App\Http\Controllers\HomeController::class,'our_partners'])->name('our_partners');
Route::get('annual_report_dynm',[App\Http\Controllers\HomeController::class,'annual_report_dynm'])->name('annual_report_dynm');
Route::get('credit_rating_dynm',[App\Http\Controllers\HomeController::class,'credit_rating_dynm'])->name('credit_rating_dynm');
Route::get('branch',[App\Http\Controllers\HomeController::class,'branch'])->name('branch');
Route::get('affordable',[App\Http\Controllers\HomeController::class,'affordable'])->name('affordable');
Route::get('msme',[App\Http\Controllers\HomeController::class,'msme'])->name('msme');

Route::get('newsroom',[App\Http\Controllers\HomeController::class,'newsroom'])->name('newsroom');

///FOOTER///
Route::get('newsletter',[App\Http\Controllers\HomeController::class,'newsletter'])->name('newsletter');
Route::get('terms-and-condition',[App\Http\Controllers\HomeController::class,'termsandcondition'])->name('termsandcondition');
Route::get('privacy-policy',[App\Http\Controllers\HomeController::class,'privacypolicy'])->name('privacypolicy');
Route::get('compliances',[App\Http\Controllers\HomeController::class,'compliance'])->name('compliance');
Route::get('ombudsman-scheme',[App\Http\Controllers\HomeController::class,'ombudsmanscheme'])->name('ombudsmanscheme');
Route::get('nachcancellation',[App\Http\Controllers\HomeController::class,'nachcancellation'])->name('nachcancellation');
Route::get('grievance-redressal-policy',[App\Http\Controllers\HomeController::class,'grievanceredressalpolicy'])->name('grievanceredressalpolicy');
Route::get('interest-rate-policy',[App\Http\Controllers\HomeController::class,'interestratepolicy'])->name('interestratepolicy');
Route::get('fair-practices-code',[App\Http\Controllers\HomeController::class,'fairpracticescode'])->name('fairpracticescode');


// Route::get('/intro', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::post('/logout_admin', [App\Http\Controllers\HomeController::class, 'logout_admin'])->name('logout_admin');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//save_remarks
// Route::post('/save-remarks', 'ApplicationFormController@saveRemarks')->name('save_remarks');
Route::post('/save-remarks', function (Illuminate\Http\Request $request) {
    \Log::info('Request data:', $request->all());
    // Handle the form submission here
    // Access form data using $request->input('field_name')
    // Save remarks to the database, etc.
    
    return redirect()->back()->with('message', 'Remarks saved successfully!');
})->name('save_remarks');



Route::group(['prefix'=>'admin','middleware'=>['auth']],function () {
    // OurpartnersController
    Route::get('/ourpartners_common',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_common'])->name('ourpartners_common');
    
    Route::post('/ourpart_com_upd',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpart_com_upd'])->name('ourpart_com_upd');

    // Annual Report
    Route::get('/ourpartners_annual_report',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_annual_report'])->name('ourpartners_annual_report');
    Route::get('/ourpartners_annual_create',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_annual_create'])->name('ourpartners_annual_create');
    Route::post('/ourpart_annul_store',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpart_annul_store'])->name('ourpart_annul_store');
    Route::get('/ourpartners_annual_edit/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_annual_edit'])->name('ourpartners_annual_edit');
    Route::post('/ourpart_annul_update/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpart_annul_update'])->name('ourpart_annul_update');
    Route::get('/ourpartner_annual_delete',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartner_annual_delete'])->name('ourpartner_annual_delete');

    // Credit Rating
    Route::get('/ourpartners_credit_rating',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_credit_rating'])->name('ourpartners_credit_rating');
    Route::get('/ourpartners_credit_create',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_credit_create'])->name('ourpartners_credit_create');
    Route::post('/ourpart_credit_store',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpart_credit_store'])->name('ourpart_credit_store');
    Route::get('/ourpartners_credit_edit/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_credit_edit'])->name('ourpartners_credit_edit');
    Route::post('/ourpartners_credit_update/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'ourpartners_credit_update'])->name('ourpartners_credit_update');
    Route::get('/ourpartner_credit_delete',
    [App\Http\Controllers\Admin\OurpartnersController::class,'ourpartner_credit_delete'])->name('ourpartner_credit_delete');
Route::get('/adminlogin', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('index');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


    // News Routes
    Route::get('news/category', [App\Http\Controllers\Admin\NewsController::class, 'categories'])->name('admin-news-categories');
    Route::post('news/categories', [App\Http\Controllers\Admin\NewsController::class, 'addcategory'] )->name('admin-add-category');
    Route::get('news/category/{id}', [App\Http\Controllers\Admin\NewsController::class, 'editcategory'])->name('admin-edit-categories');
    Route::post('news/categories/{id}', [App\Http\Controllers\Admin\ContactControllerNewsController::class, 'updatecategory'])->name('admin-edit-category');
    Route::delete('news/categories/{id}', [App\Http\Controllers\Admin\NewsController::class, 'deletecategory'])->name('admin-delete-category');

    Route::get('/news', [App\Http\Controllers\Admin\NewsController::class, 'news'])->name('admin-news');
    Route::get('news', [App\Http\Controllers\Admin\NewsController::class, 'news'])->name('admin-news');
    Route::get('news/create',[App\Http\Controllers\Admin\NewsController::class, 'addnews'])->name('admin-add-news');
    Route::post('news/create', [App\Http\Controllers\Admin\NewsController::class, 'addpost'] )->name('admin-add-post');

    Route::get('news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'editnews'])->name('admin-edit-news');
    Route::post('news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'editpost'] )->name('admin-edit-post');

    Route::delete('news/{id}', [App\Http\Controllers\Admin\NewsController::class, 'deletepost'] )->name('admin-delete-post');
    Route::get('deleteimage/{id}', [App\Http\Controllers\Admin\NewsController::class, 'deleteimage'])->name('admin-delete-image');
    Route::delete('news/status/{type}/{id}', [App\Http\Controllers\Admin\NewsController::class, 'poststatus'])->name('admin-post-status');
    Route::get('newsupdate', [App\Http\Controllers\Admin\NewsController::class, 'newsupdate']);

    // Page Management
    Route::get('pagemanagement', [App\Http\Controllers\Admin\PageManagementController::class, 'pagemanagement'])->name('admin-pagemanagement');
    Route::get('pagemanagement/create', [App\Http\Controllers\Admin\PageManagementController::class, 'addpages'])->name('admin-add-pagemanagement');
    Route::get('pagemanagement/{edit}', [App\Http\Controllers\Admin\PageManagementController::class, 'editpages'])->name('admin-edit-pagemanagement');
    Route::post('pagemanagement/create', [App\Http\Controllers\Admin\PageManagementController::class, 'storepage'])->name('admin-store-pagemanagement');
    Route::post('pagemanagement/{id}', [App\Http\Controllers\Admin\PageManagementController::class, 'updatepage'])->name('admin-update-pagemanagement');
    Route::delete('pagemanagement/{id}', [App\Http\Controllers\Admin\PageManagementController::class, 'deletepage'] )->name('admin-delete-page');

////////////////////
//MANAGE FRONTEND//
//////////////////

//CONTACT PAGE
    // Route::get('contact',[App\Http\Controllers\Admin\ContactController::class,'index'])->name('contact');
    // Route::get('contact/create',[App\Http\Controllers\Admin\ContactController::class,'create'])->name('create-contact');
    Route::get('contact/edit',[App\Http\Controllers\Admin\ContactController::class,'edit'])->name('eidt-contact');
    // Route::get('contact/create',[App\Http\Controllers\Admin\ContactController::class,'store'])->name('store-contact');
    Route::post('contact/{id}',[App\Http\Controllers\Admin\ContactController::class,'update'])->name('update-contact');
    // Route::delete('contact/{id}',[App\Http\Controllers\Admin\ContactController::class,'destroy'])->name('delete-contact');

//PARTNER PAGE
        Route::get('/partnerpage',[App\Http\Controllers\Admin\PartnerPageController::class,'index'])->name('partnerpage');
        Route::get('/edit',[App\Http\Controllers\Admin\PartnerPageController::class,'edit'])->name('partnerpage.edit');
        Route::post('/partnerpageupdate',[App\Http\Controllers\Admin\PartnerPageController::class,'update'])->name('partnerpage.update');

// //CAREER PAGE
//       Route::get('career_page',[\App\Http\Controllers\Admin\CareerPageContrller::class,'index'])->name('editcareerpage');
//       Route::get('edit',[\App\Http\Controllers\Admin\CareerPageContrller::class,'edit'])->name('career_page.edit');
//       Route::post('{update}',[\App\Http\Controllers\Admin\CareerPageContrller::class,'update'])->name('career_page.update');

//DASHBOARD MANAGEMENT
     Route::get('dashboard_page/customer_list',[App\Http\Controllers\Admin\DashBoardController::class,'customer_list'])->name('dashboard_page.customer_list');
     Route::get('dashboard_page/application_form_list',[App\Http\Controllers\Admin\DashBoardController::class,'application_form_list'])->name('dashboard_page.application_form_list');
     Route::get('dashboard_page/contact_form_list',[App\Http\Controllers\Admin\DashBoardController::class,'contact_form_list'])->name('dashboard_page.contact_form_list');

//HOME PAGE MANAGEMENT

      Route::get('/home_page',[App\Http\Controllers\Admin\HomePageController::class,'index'])->name('homepage');
      Route::get('/edit',[App\Http\Controllers\Admin\HomePageController::class,'edit'])->name('home_page.edit');
      Route::post('/homeupdate',[App\Http\Controllers\Admin\HomePageController::class,'update'])->name('home_page.update');
      Route::get('/customer_list',[App\Http\Controllers\Admin\HomePageController::class,'customer_list'])->name('home_page.customer_list');
      Route::get('/emiupdate',[App\Http\Controllers\Admin\HomePageController::class,'emiupdate'])->name('emiupdate');
      Route::post('/emi_updated',[App\Http\Controllers\Admin\HomePageController::class,'emi_updated'])->name('emi_updated');
//FOOTER PAGE MANAGEMET

   //Terms and condition//
    Route::get('/footer/terms-and-condition',[App\Http\Controllers\Admin\FooterController::class,'terms_and_condition'])->name('footer/terms_and_condition');
    Route::get('/footer/edit',[App\Http\Controllers\Admin\FooterController::class,'terms_and_conditionedit'])->name('footer/terms_and_condition-edit');
    Route::post('/footer/termsconditionupdate',[App\Http\Controllers\Admin\FooterController::class,'terms_and_conditionupdate'])->name('footer/terms_and_condition.update');

    //Grievance Redressal Policy//
    Route::get('/footer/grievance-redressal-policy',[App\Http\Controllers\Admin\FooterController::class,'grievance_redressal_policy'])->name('footer/grievance_redressal_policy');
    Route::get('/footer/edit',[App\Http\Controllers\Admin\FooterController::class,'grievance_redressal_policyedit'])->name('footer/grievance_redressal_policy-edit');
    Route::post('/footer/grievanceupdate',[App\Http\Controllers\Admin\FooterController::class,'grievance_redressal_policyupdate'])->name('footer/grievance_redressal_policy.update');

    //Integrated ombusman scheme//
    Route::get('/footer/integrated-ombusman-scheme',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_scheme'])->name('footer/integrated_ombusman_scheme');
    Route::get('/footer/integratedcreate',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_schemecreate'])->name('footer/integrated.create');
    Route::get('/footer/integratededit/{id}',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_schemeedit'])->name('footer/integrated.edit');
    Route::post('/footer/integratedstore',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_schemestore'])->name('footer/integrated.store');
    Route::post('/footer/integratedupdate/{id}',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_schemeupdate'])->name('footer/integrated.update');
    Route::delete('/footer/integrateddelete/{id}',[App\Http\Controllers\Admin\FooterController::class,'integrated_ombusman_schemedestroy'])->name('footer/integrated.delete');

    //Newsletter//
    Route::get('/footer/newsletter',[App\Http\Controllers\Admin\FooterController::class,'newsletter'])->name('footer/newsletter');
    Route::get('/footer/newslettercreate',[App\Http\Controllers\Admin\FooterController::class,'newslettercreate'])->name('footer/newsletter.create');
    Route::get('/footer/newsletteredit/{id}',[App\Http\Controllers\Admin\FooterController::class,'newsletteredit'])->name('footer/newsletter.edit');
    Route::post('/footer/newsletterstore',[App\Http\Controllers\Admin\FooterController::class,'newsletterstore'])->name('footer/newsletter.store');
    Route::post('/footer/newsletterupdate/{id}',[App\Http\Controllers\Admin\FooterController::class,'newsletterupdate'])->name('footer/newsletter.update');
    Route::delete('/footer/newsletterdelete/{id}',[App\Http\Controllers\Admin\FooterController::class,'newsletterdestroy'])->name('footer/newsletter.delete');

   

//HEADER PAGE  MANAGEMENT
    // overview
    Route::get('about/overview',[App\Http\Controllers\Admin\AboutController::class,'overview'])->name('about.overview');
    Route::post('about/overview/update',[App\Http\Controllers\Admin\AboutController::class,'ovr_update'])->name('overview.update');
    
    
    // OVERVIEW MULTIPLES LIST
    Route::get('/about/overviewmultiples',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples'])->name('overviewmultiples');
    Route::get('/about/overviewmultiples_create',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples_create'])->name('overviewmultiples_create');
    Route::post('/about/overviewmultiples_store',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples_store'])->name('overviewmultiples_store');
    Route::get('/about/overviewmultiples_edit/{id}',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples_edit'])->name('overviewmultiples_edit');
    Route::post('/about/overviewmultiples_update/{id}',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples_update'])->name('overviewmultiples_update');
    Route::get('/about/overviewmultiples_delete',[App\Http\Controllers\Admin\AboutController::class,'overviewmultiples_delete'])->name('overviewmultiples_delete');

    // foundersdesk
    Route::get('about/foundersdesk',[App\Http\Controllers\Admin\AboutController::class,'foundersdesk'])->name('foundersdesk');
    Route::post('about/foundersdesk/update',[App\Http\Controllers\Admin\AboutController::class,'foundersdesk_update'])->name('foundersdesk_update');

    // director
    Route::get('about/director_list',[App\Http\Controllers\Admin\AboutController::class,'director_list'])->name('director_list');
    Route::get('about/director_create',[App\Http\Controllers\Admin\AboutController::class,'director_create'])->name('director_create');
    Route::post('about/director_store',[App\Http\Controllers\Admin\AboutController::class,'director_store'])->name('director_store');
    Route::get('about/director_edit/{id}',[App\Http\Controllers\Admin\AboutController::class,'director_edit'])->name('director_edit');
    Route::post('about/director_update/{id}',[App\Http\Controllers\Admin\AboutController::class,'director_update'])->name('director_update');
    Route::get('about/director_delete',[App\Http\Controllers\Admin\AboutController::class,'director_delete'])->name('director_delete');

    // team
    Route::get('about/team_list',[App\Http\Controllers\Admin\AboutController::class,'team_list'])->name('team_list');
    Route::get('about/team_create',[App\Http\Controllers\Admin\AboutController::class,'team_create'])->name('team_create');
    Route::post('about/team_store',[App\Http\Controllers\Admin\AboutController::class,'team_store'])->name('team_store');
    Route::get('about/team_edit/{id}',[App\Http\Controllers\Admin\AboutController::class,'team_edit'])->name('team_edit');
    Route::post('about/team_update/{id}',[App\Http\Controllers\Admin\AboutController::class,'team_update'])->name('team_update');
    Route::get('about/team_delete',[App\Http\Controllers\Admin\AboutController::class,'team_delete'])->name('team_delete');
    
    // Product (testimonial)
    Route::get('testimonial_list',[App\Http\Controllers\Admin\ProductController::class,'testimonial_list'])->name('testimonial_list');
    Route::get('testimonial_create',[App\Http\Controllers\Admin\ProductController::class,'testimonial_create'])->name('testimonial_create');
    Route::post('testimonial_store',[App\Http\Controllers\Admin\ProductController::class,'testimonial_store'])->name('testimonial_store');
    Route::get('testimonial_delete',[App\Http\Controllers\Admin\ProductController::class,'testimonial_delete'])->name('testimonial_delete');
    Route::get('testimonial_edit/{id}',[App\Http\Controllers\Admin\ProductController::class,'testimonial_edit'])->name('testimonial_edit');
    Route::post('testimonial_update/{id}',[App\Http\Controllers\Admin\ProductController::class,'testimonial_update'])->name('testimonial_update');
    
    //Product (offer_mesme)
    Route::get('offer_mesme',[App\Http\Controllers\Admin\ProductController::class,'offer_mesme'])->name('offer_mesme');
    Route::post('offermesme_update/{id}',[App\Http\Controllers\Admin\ProductController::class,'offermesme_update'])->name('offermesme_update');
    
    Route::get('about/team_description',[App\Http\Controllers\Admin\AboutController::class,'team_description'])->name('team_description');
    Route::post('about/team-description/update',[App\Http\Controllers\Admin\AboutController::class,'team_descriptionupdate'])->name('about.team_descriptionupdate');
    
    //WE_ARE_HIRING (why_join)
    Route::get('why_join',[App\Http\Controllers\Admin\ProductController::class,'why_join'])->name('why_join');
    Route::post('why_join_update/{id}',[App\Http\Controllers\Admin\ProductController::class,'why_join_update'])->name('why_join_update');
    
    //Contact us (branch_list)
    Route::get('branch_list',[App\Http\Controllers\Admin\ContactController::class,'branch_list'])->name('branch_list');
    Route::get('branch_create',[App\Http\Controllers\Admin\ContactController::class,'branch_create'])->name('branch_create');
    Route::post('branch_store',[App\Http\Controllers\Admin\ContactController::class,'branch_store'])->name('branch_store');
    Route::get('branch_delete',[App\Http\Controllers\Admin\ContactController::class,'branch_delete'])->name('branch_delete');
    Route::get('branch_edit/{id}',[App\Http\Controllers\Admin\ContactController::class,'branch_edit'])->name('branch_edit');
    Route::post('branch_update/{id}',[App\Http\Controllers\Admin\ContactController::class,'branch_update'])->name('branch_update');
    
    
    
    
    // Footer
    // nachcancellation
    Route::get('footer/nachcancellation',[App\Http\Controllers\Admin\FooterController::class,'index'])->name('footer/nachcancellation');
    Route::post('/nachcancellation',[App\Http\Controllers\Admin\FooterController::class,'nachcancellation_update'])->name('nachcancellation.update');

    // privacypolicy
    Route::get('footer/privacypolicy',[App\Http\Controllers\Admin\FooterController::class,'privacypolicy'])->name('footer/privacypolicy');
    Route::post('/privacypolicy',[App\Http\Controllers\Admin\FooterController::class,'privacypolicy_update'])->name('privacypolicy.update');

    // interestratepolicy
    Route::get('footer/interestratepolicy',[App\Http\Controllers\Admin\FooterController::class,'interestratepolicy'])->name('footer/interestratepolicy');
    Route::post('/interestratepolicy_update',[App\Http\Controllers\Admin\FooterController::class,'interestratepolicy_update'])->name('interestratepolicy.update');

    // Fairpracticecode
    Route::get('footer/fairpracticecode',[App\Http\Controllers\Admin\FooterController::class,'fairpracticecode'])->name('footer/fairpracticecode');
    Route::post('/fairpracticecode_update',[App\Http\Controllers\Admin\FooterController::class,'fairpracticecode_update'])->name('fairpracticecode.update');

    // compliance
    Route::get('footer/compliance',[App\Http\Controllers\Admin\FooterController::class,'compliance'])->name('footer/compliance');
    Route::get('footer/compliance_create',[App\Http\Controllers\Admin\FooterController::class,'compliance_create'])->name('compliance_create');
    Route::post('footer/compliance_store',[App\Http\Controllers\Admin\FooterController::class,'compliance_store'])->name('compliance_store');
    Route::get('footer/compliance_edit/{id}',[App\Http\Controllers\Admin\FooterController::class,'compliance_edit'])->name('compliance_edit');
    Route::post('footer/compliance_update/{id}',[App\Http\Controllers\Admin\FooterController::class,'compliance_update'])->name('compliance_update');
    Route::get('footer/compliance_delete',[App\Http\Controllers\Admin\FooterController::class,'compliance_delete'])->name('compliance_delete');

    // newsroom
    Route::get('/newsroom_list',[App\Http\Controllers\Admin\FooterController::class,'newsroom_list'])->name('newsroom_list');
    Route::get('/newsroom_create',[App\Http\Controllers\Admin\FooterController::class,'newsroom_create'])->name('newsroom_create');
    Route::post('/newsroom_store',[App\Http\Controllers\Admin\FooterController::class,'newsroom_store'])->name('newsroom_store');
    Route::get('/newsroom_delete',[App\Http\Controllers\Admin\FooterController::class,'newsroom_delete'])->name('newsroom_delete');
    Route::get('/newsroom_edit/{id}',[App\Http\Controllers\Admin\FooterController::class,'newsroom_edit'])->name('newsroom_edit');
    Route::post('/newsroom_update/{id}',[App\Http\Controllers\Admin\FooterController::class,'newsroom_update'])->name('newsroom_update');
    
    // BACKED BY MARQUEE INVESTORS & LENDERS
    Route::get('/investor/multiples',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples'])->name('multiples');
    Route::get('/investor/multiples_create',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples_create'])->name('multiples_create');
    Route::post('/investor/multiples_store',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples_store'])->name('multiples_store');
    Route::get('/investor/multiples_edit/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples_edit'])->name('multiples_edit');
    Route::post('/investor/multiples_update/{id}',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples_update'])->name('multiples_update');
    Route::get('/investor/multiples_delete',[App\Http\Controllers\Admin\OurpartnersController::class,'multiples_delete'])->name('multiples_delete');
    
    //WE ARE HIRING BACKEND    
    Route::get('/werhiring/life_apac',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac'])->name('life_apac');
    Route::get('/werhiring/life_apac_create',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac_create'])->name('life_apac_create');
    Route::post('/werhiring/life_apac_store',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac_store'])->name('life_apac_store');
    Route::get('/werhiring/life_apac_edit/{id}',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac_edit'])->name('life_apac_edit');
    Route::post('/werhiring/life_apac_update/{id}',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac_update'])->name('life_apac_update');
    Route::get('/werhiring/life_apac_delete',[App\Http\Controllers\Admin\WearehiringController::class,'life_apac_delete'])->name('life_apac_delete');
    
    });
    
    // loan_submission
    Route::post('loan_submission',[App\Http\Controllers\HomeController::class,'loan_submission'])->name('loan_submission');

    