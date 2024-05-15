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
Route::get('contact_us',[App\Http\Controllers\HomeController::class,'contact_us'])->name('contact_us');
Route::get('about',[App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('overview',[App\Http\Controllers\HomeController::class,'overview'])->name('overview');
Route::get('founderdesk',[App\Http\Controllers\HomeController::class,'founderdesk'])->name('founderdesk');


///ABOUT SUBMENU//
Route::get('team',[App\Http\Controllers\HomeController::class,'team'])->name('team');
Route::get('product',[App\Http\Controllers\HomeController::class,'product'])->name('product');
Route::get('career',[App\Http\Controllers\HomeController::class,'career'])->name('career');
Route::get('medias',[App\Http\Controllers\HomeController::class,'medias'])->name('medias');
Route::get('branch',[App\Http\Controllers\HomeController::class,'branch'])->name('branch');
Route::get('affordable',[App\Http\Controllers\HomeController::class,'affordable'])->name('affordable');
Route::get('msme',[App\Http\Controllers\HomeController::class,'msme'])->name('msme');

///FOOTER///
Route::get('newsletter_frontend',[App\Http\Controllers\HomeController::class,'newsletter_frontend'])->name('newsletter_frontend');


// Route::get('/intro', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::post('/logout_admin', [App\Http\Controllers\HomeController::class, 'logout_admin'])->name('logout_admin');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::group(['prefix'=>'admin','middleware'=>['auth']],function () {
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

//HOME PAGE MANAGEMENT

      Route::get('/home_page',[App\Http\Controllers\Admin\HomePageController::class,'index'])->name('homepage');
      Route::get('/edit',[App\Http\Controllers\Admin\HomePageController::class,'edit'])->name('home_page.edit');
      Route::post('/homeupdate',[App\Http\Controllers\Admin\HomePageController::class,'update'])->name('home_page.update');

//FOOTER PAGE MANAGEMET

    //Terms and condition//
    Route::get('/terms-and-condition',[App\Http\Controllers\Admin\TermsConditionsController::class,'index'])->name('terms_and_condition');
    Route::get('/edit',[App\Http\Controllers\Admin\TermsConditionsController::class,'edit'])->name('terms_and_condition-edit');
    Route::post('/termsconditionupdate',[App\Http\Controllers\Admin\TermsConditionsController::class,'update'])->name('terms_and_condition.update');

    //Grievance Redressal Policy//
    Route::get('/grievance-redressal-policy',[App\Http\Controllers\Admin\GrievanceController::class,'index'])->name('grievance_redressal_policy');
    Route::get('/edit',[App\Http\Controllers\Admin\GrievanceController::class,'edit'])->name('grievance_redressal_policy-edit');
    Route::post('/grievanceupdate',[App\Http\Controllers\Admin\GrievanceController::class,'update'])->name('grievance_redressal_policy.update');

    //Integrated ombusman scheme//
    Route::get('/integrated-ombusman-scheme',[App\Http\Controllers\Admin\IntegratedController::class,'index'])->name('integrated_ombusman_scheme');
    Route::get('/integratedcreate',[App\Http\Controllers\Admin\IntegratedController::class,'create'])->name('integrated.create');
    Route::get('/integratededit/{id}',[App\Http\Controllers\Admin\IntegratedController::class,'edit'])->name('integrated.edit');
    Route::post('/integratedstore',[App\Http\Controllers\Admin\IntegratedController::class,'store'])->name('integrated.store');
    Route::post('/integratedupdate/{id}',[App\Http\Controllers\Admin\IntegratedController::class,'update'])->name('integrated.update');
    Route::delete('/integrateddelete/{id}',[App\Http\Controllers\Admin\IntegratedController::class,'destroy'])->name('integrated.delete');

    //Newsletter//
    Route::get('/newsletter',[App\Http\Controllers\Admin\NewsletterController::class,'index'])->name('newsletter');
    Route::get('/newslettercreate',[App\Http\Controllers\Admin\NewsletterController::class,'create'])->name('newsletter.create');
    Route::get('/newsletteredit/{id}',[App\Http\Controllers\Admin\NewsletterController::class,'edit'])->name('newsletter.edit');
    Route::post('/newsletterstore',[App\Http\Controllers\Admin\NewsletterController::class,'store'])->name('newsletter.store');
    Route::post('/newsletterupdate/{id}',[App\Http\Controllers\Admin\NewsletterController::class,'update'])->name('newsletter.update');
    Route::delete('/newsletterdelete/{id}',[App\Http\Controllers\Admin\NewsletterController::class,'destroy'])->name('newsletter.delete');

    // overview
    Route::get('about/overview',[App\Http\Controllers\Admin\AboutController::class,'overview'])->name('about.overview');
    Route::post('about/overview/update',[App\Http\Controllers\Admin\AboutController::class,'ovr_update'])->name('overview.update');

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
    
    // Footer
    // nachcancellation
    Route::get('footer/nachcancellation',[App\Http\Controllers\admin\FooterController::class,'index'])->name('nachcancellation');
    Route::post('/nachcancellation',[App\Http\Controllers\admin\FooterController::class,'nachcancellation_update'])->name('nachcancellation.update');

    // privacypolicy
    Route::get('footer/privacypolicy',[App\Http\Controllers\admin\FooterController::class,'privacypolicy'])->name('privacypolicy');
    Route::post('/privacypolicy',[App\Http\Controllers\admin\FooterController::class,'privacypolicy_update'])->name('privacypolicy.update');

    // interestratepolicy
    Route::get('footer/interestratepolicy',[App\Http\Controllers\admin\FooterController::class,'interestratepolicy'])->name('interestratepolicy');
    Route::post('/interestratepolicy_update',[App\Http\Controllers\admin\FooterController::class,'interestratepolicy_update'])->name('interestratepolicy.update');

    // Fairpracticecode
    Route::get('footer/fairpracticecode',[App\Http\Controllers\admin\FooterController::class,'fairpracticecode'])->name('fairpracticecode');
    Route::post('/fairpracticecode_update',[App\Http\Controllers\admin\FooterController::class,'fairpracticecode_update'])->name('fairpracticecode.update');

    // compliance
    Route::get('footer/compliance',[App\Http\Controllers\admin\FooterController::class,'compliance'])->name('compliance');
    Route::get('footer/compliance_create',[App\Http\Controllers\admin\FooterController::class,'compliance_create'])->name('compliance_create');
    Route::post('footer/compliance_store',[App\Http\Controllers\admin\FooterController::class,'compliance_store'])->name('compliance_store');
    Route::get('footer/compliance_edit/{id}',[App\Http\Controllers\admin\FooterController::class,'compliance_edit'])->name('compliance_edit');
    Route::post('footer/compliance_update/{id}',[App\Http\Controllers\admin\FooterController::class,'compliance_update'])->name('compliance_update');
    Route::get('footer/compliance_delete',[App\Http\Controllers\admin\FooterController::class,'compliance_delete'])->name('compliance_delete');


    });
