<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Termscondition;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\State;
use App\Models\Overview;
use App\Models\Branchpincode;
use App\Models\Loanform;
use App\Models\Director;
use App\Models\Team;
use App\Models\Emiupdate;
use App\Models\Foundersdesk;
use App\Models\Ourpartnercommon;
use App\Models\Ourpartnerannual;
use App\Models\Ourpartnercredit;
use App\Models\FrontendContactUs;
use Carbon\Carbon;
use App\Models\Newsroom;
use App\Models\TeamDescritption;
use App\Models\Testimonial;
use App\Models\Offermesme;
use App\Models\Whyjoin;
use App\Models\Multiples;
use App\Models\Nachcancellation;
use App\Models\Compliance;
use App\Models\Integrated;
use App\Models\Fairpracticecode;
use App\Models\Interestratepolicy;
use App\Models\Lifeatapacimge;
use App\Models\Newsletter;
use App\Models\Privacypolicy;
use App\Models\Grievance;
use App\Models\Overviewmultipleimage;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Exception;
use Carbon\Exceptions\Exception as ExceptionsException;
use DB;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Foundation\Bootstrap\HandleExceptions;
use PhpParser\Node\Expr\Cast\Double;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('admin.index');

    }
    public function logout_admin(){
        return view('auth.login');

    }

    public function home_intro()
    {
       
        $apac_home=Home::find(1);
        $emiupdate = Emiupdate::find(1);

        return view('frontend.home',compact('apac_home','emiupdate'));
    }

    public function home_intro_formone(Request $request)
    {
        
        $request->validate([
            "fullname1"=>"required",
            "mobilenumber1"=>"required",
            "pincode1"=>"required"
        ]);
        // $check = Loanform::all();
        // foreach ($check as $row) {
        //   if($row->mobilenumber == $request->mobilenumber1){
        //       return redirect()
        //       ->route('home_intro')
        //       ->with("warning","The Mobile Number is Already Taken!");
        //   }
        // }
        $form_home=Loanform::insert([
            "fullname"=>$request->fullname1,
            "mobilenumber"=>$request->mobilenumber1,
            "pincode"=>$request->pincode1,
        ]);


        $response = app('App\Http\Controllers\HomeController')->pincodeapi($request->pincode1);
        echo "".$response;
       
        if($response != "Pincode Available"){
            return redirect()
            ->route('home_intro')
            ->with("warning","Thanks for your interest, APAC currently does not serve this region. We are expanding fast and as soon as we start serving this region, our representative will contact you.");
    
            }

            if($response == "Server not avalibe"){
                return redirect()
                ->route('home_intro')
                ->with("warning","Service is not avalible Please try agian");
        
            }
        // app('App\Http\Controllers\MailController')->txt_mail($request->fullname1,$request->pincode1,$request->mobilenumber1);
        

        return redirect()
        ->route('home_intro')
        ->with("success","Thank you for contacting APAC!!! Our team will contact you shortly.");


    }
    public function home_intro_formtwo(Request $request)
    {
        $request->validate([
            "fullname2"=>"required",
            "mobilenumber2"=>"required",
            "pincode2"=>"required"
        ]);
        // $check = Loanform::all();
        // foreach ($check as $row) {
        //   if($row->mobilenumber == $request->mobilenumber2){
        //       return redirect()
        //       ->route('home_intro')
        //       ->with("warning","The Mobile Number is Already Taken!");
        //   }
        // }
        $form_home=Loanform::insert([
            "fullname"=>$request->fullname2,
            "mobilenumber"=>$request->mobilenumber2,
            "pincode"=>$request->pincode2,
        ]);
        $response = app('App\Http\Controllers\HomeController')->pincodeapi($request->pincode2);
        echo "".$response;
        
        if($response != "Pincode Available"){
            return redirect()
            ->route('home_intro')
            ->with("warning","Thanks for your interest, APAC currently does not serve this region. We are expanding fast and as soon as we start serving this region, our representative will contact you.");
    
            }

            if($response == "Server not avalibe"){
                return redirect()
                ->route('home_intro')
                ->with("warning","Service is not avalible Please try agian");
        
            }
        // app('App\Http\Controllers\MailController')->txt_mail($request->fullname2,$request->pincode2,$request->mobilenumber2);

        
        return redirect()
        ->route('home_intro')
        ->with("success","Thank you for contacting APAC!!! Our team will contact you shortly.");


    }
    public function home_intro_formthree(Request $request)
    {
        $request->validate([
            "fullname3"=>"required",
            "mobilenumber3"=>"required",
            "pincode3"=>"required"
        ]);
        // $check = Loanform::all();
        // foreach ($check as $row) {
        //   if($row->mobilenumber == $request->mobilenumber3){
        //       return redirect()
        //       ->route('home_intro')
        //       ->with("warning","The Mobile Number is Already Taken!");
        //   }
        // }
        $form_home=Loanform::insert([
            "fullname"=>$request->fullname3,
            "mobilenumber"=>$request->mobilenumber3,
            "pincode"=>$request->pincode3,
        ]);
        $response =  app('App\Http\Controllers\HomeController')->pincodeapi($request->pincode3);
        echo "".$response;
        
        if($response != "Pincode Available"){
        return redirect()
        ->route('home_intro')
        ->with("warning","Thanks for your interest, APAC currently does not serve this region. We are expanding fast and as soon as we start serving this region, our representative will contact you.");
            }
        
            if($response == "Server not avalibe"){
                return redirect()
                ->route('home_intro')
                ->with("warning","Service is not avalible Please try agian");
        
            }
        // app('App\Http\Controllers\MailController')->txt_mail($request->fullname3,$request->pincode3,$request->mobilenumber3);

        //app('App\Http\Controllers\MailController')->attached_mail(); 



        return redirect()
        ->route('home_intro')
        ->with("success","Thank you for contacting APAC!!! Our team will contact you shortly.");


    }

    public function home_intro_formfour(Request $request)
    {
        $request->validate([
            "fullname4"=>"required",
            "mobilenumber4"=>"required",
            "pincode4"=>"required"
        ]);
        // $check = Loanform::all();
        // foreach ($check as $row) {
        //   if($row->mobilenumber == $request->mobilenumber3){
        //       return redirect()
        //       ->route('home_intro')
        //       ->with("warning","The Mobile Number is Already Taken!");
        //   }
        // }
        $form_home=Loanform::insert([
            "fullname"=>$request->fullname4,
            "mobilenumber"=>$request->mobilenumber4,
            "pincode"=>$request->pincode4,
        ]);
        $response =  app('App\Http\Controllers\HomeController')->pincodeapi($request->pincode4);
        echo "".$response;
        
        if($response != "Pincode Available"){
        return redirect()
        ->route('home_intro')
        ->with("warning","Thanks for your interest, APAC currently does not serve this region. We are expanding fast and as soon as we start serving this region, our representative will contact you.");
            }
        
            if($response == "Server not avalibe"){
                return redirect()
                ->route('home_intro')
                ->with("warning","Service is not avalible Please try agian");
        
            }
        // app('App\Http\Controllers\MailController')->txt_mail($request->fullname3,$request->pincode3,$request->mobilenumber3);

        //app('App\Http\Controllers\MailController')->attached_mail(); 



        return redirect()
        ->route('home_intro')
        ->with("success","Thank you for contacting APAC!!! Our team will contact you shortly.");


    }

    public function pincodeapi(int $pincode)
    {
      try{
        $response = Http::get('https://alphauat.apacfin.in:8080/CheckPincodeAvailable/'.$pincode);
        return $response;
      }catch(ConnectionException $e){
        return "Server not available";
      }

    }



    public function loan_submission(Request $request)
    {
        
        // $check = Loanform::all();
        // foreach ($check as $row) {
        //   if($row->mobilenumber == $request->mobilenumbers){
        //       return 2;
        //   }
        // }
        
        $data['overview'] = Loanform::insert([
            'fullname'=>$request->fullnames,
            'mobilenumber'=>$request->mobilenumbers,
            'pincode'=>$request->pincodes
        ]);
        return 1;
    }





//CONTACT US PAGE///WITH FORM///
    public function contact_us()
    {

        // $state_info=State::all();//get data from table
                $state_info=State::orderBy('state', 'ASC')->get();

		return view('frontend.contact_us',compact('state_info'));//sent data to view



    }

   	public function branches(Request $request){


	    //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=Branchpincode::select('branch','id')->where('state_id',$request->id)->take(100)->orderBy('branch', 'ASC')->get();
        return response()->json($data);//then sent this data to ajax success
	}


public function findPincode(Request $request){

		//it will get price if its id match with product id
		$p=Branchpincode::select('pincode','embedded','branch_address','branch')->where('id',$request->id)->first();

    	return response()->json($p);

	}
// public function pincode_get_loc(Request $request){

// // 		$p=Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode',$request->pincode)->first();
        
// //     	return response()->json($p);


// $p=Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode',$request->pincode)->first();

//         if($p == null){
//             $min_pincode = Branchpincode::min('pincode');
//             $max_pincode = Branchpincode::max('pincode');
//             if($min_pincode > $request->pincode){
//                 $r=Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode','302021')->first();
//     	        return response()->json($r);
//             }
//             else if($max_pincode < $request->pincode){
//                 $s=Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode','642126')->first();

//     	        return response()->json($s);
//             }else{
//                 $q=Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode','<=',$request->pincode)->orderBy('pincode', 'desc')->limit(1)->first();

//     	        return response()->json($q);
//             }
//         }else{

//             return response()->json($p);
//         }
// 	}
public function pincode_get_loc(Request $request){

		$p=Branchpincode::select('pincode','latitude','longitude','embedded','branch_address','branch')->where('pincode',$request->pincode)->first();
		$min =  DB::table('branchpincodes')->select('pincode')->orderBy('pincode', 'asc')->first();
        $min_operators_one_digit = str_split($min->pincode, 1);
        $min_one_digit =(string)$min_operators_one_digit[0];


        $max =  DB::table('branchpincodes')->select('pincode')->orderBy('pincode', 'desc')->first();
        $max_operators_one_digit = str_split($max->pincode, 1);
        $max_one_digit =(string)$max_operators_one_digit[0];


        if($p == null){
            $operators_one_digit = str_split($request->pincode, 1);
            $one_digit =(string)$operators_one_digit[0];

            $unknow_city = DB::table('branchpincodes')->select(\DB::raw('substr(pincode, 1, 1) as pin'))->where(\DB::raw('substr(pincode, 1, 1)'),$one_digit)->groupBy('pincode')->distinct()->get();

            if($unknow_city->isEmpty() == true){
                $oops = "Oops! We are not yet present in your city";
                return response()->json($oops);
            }


            if($one_digit < $min_one_digit || $one_digit > $max_one_digit ){
                $oops = "Oops! We are not yet present in your city";
                return response()->json($oops);
            }

            $a=array();
            $pin_all_digit = Branchpincode::all();
            foreach($pin_all_digit as $row){
                array_push($a,$row->pincode);
            }
            $goal = $request->pincode;
            $closest = array_reduce($a, function($carry, $item) use($goal) {
                return (abs($item - $goal) < abs($carry - $goal) ? $item : $carry);
            }, reset($a)); // Returns 6

            $pin_closest = Branchpincode::select('pincode','latitude','longitude','branch_address','branch')->where('pincode', '=' , $closest)->get();

            return response()->json($pin_closest);

        }else{

            return response()->json($p);
        }



	}



    public function contact_us_form_store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "phone"=>"required",
            "message"=>"required"
        ]);
        $contact_us=FrontendContactUs::insert([
            "name"=>$request->name,
            "phone"=>$request->phone,
            "message"=>$request->message,
        ]);
        return redirect()
        ->route('contact_us')
        ->with("success","Thank you for contacting us. Our team will contact you shortly!");
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function team()
    {   $apac_teamdescription=TeamDescritption::find(1);
        $apac_director=Director::all();
        $apac_team=Team::all();
        return view('frontend.team',compact('apac_director','apac_team','apac_teamdescription'));
    }
    public function products()
    {
        $data['testimonial']=Testimonial::all();
        $data['offermesme']=Offermesme::find(1);
         $data['apac_home']=Home::find(1);
        return view('frontend.product',$data);
    }
    // public function we_are_hiring()
    // {
    //     $terms_condition=Termscondition::first();
    //     return view('frontend.we_are_hiring',compact('terms_condition'));
        
    // }
    
    
     public function we_are_hiring()
    {
        // $terms_condition=Termscondition::first();
        // return view('frontend.we_are_hiring',compact('terms_condition'));
        $branch_information=Branchpincode::orderBy('branch', 'ASC')->get();
        $states=state::orderBy('state','ASC')->get();
        $whyjoin=Whyjoin::find(1);
        $life_apac=Lifeatapacimge::all();


    
        return view('frontend.we_are_hiring',compact('branch_information','states','whyjoin','life_apac'));
    }
    public function our_partners()
    {
        $data['heading'] = Ourpartnercommon::find(1);
        $data['annual_report'] = Ourpartnerannual::all();
        $data['credit_rating'] =Ourpartnercredit::all();
          $data['multiples'] =Multiples::all();
        return view('frontend.our_partners',$data);
    }
    public function annual_report_dynm()
    {
        $id = $_GET['track_var_name'];
        $result = Ourpartnerannual::where('anual_nme',$id)->first();
        return $result;
    }
    public function credit_rating_dynm()
    {
        $id = $_GET['track_var_name'];
        $result = Ourpartnercredit::where('cred_name',$id)->first();
        return $result;
    }
    public function branch()
    {
        $branch_info=Contact::first();
        return view('frontend.branch',compact('branch_info'));
    }
    public function affordable()
    {

        return view('frontend.affordable');
    }
    public function msme()
    {

        return view('frontend.msme');
    }

 // overview
    public function overview()
    {
        $overviewmultiples =Overviewmultipleimage::all();
        $apac_overview=Overview::find(1);
        return view('frontend.overview',compact('apac_overview','overviewmultiples'));
    }
    public function founderdesk()
    {
        $apac_foundersdesk=Foundersdesk::find(1);
        return view('frontend.founderdesk',compact('apac_foundersdesk'));
        
    }

     public function newsletter()
    {
        $newsletter_info =Newsletter::all();

        return view('frontend.newsletter',compact('newsletter_info'));
    }
  public function termsandcondition()
    {

        $terms_conditon_info=Termscondition::find(2);
        return view('frontend.terms-and-conditions',compact('terms_conditon_info'));
    }
   public function privacypolicy()
    {
        $privacy_info=Privacypolicy::find(1);
        return view('frontend.privacy-policy',compact('privacy_info'));
    }
    public function compliance()
    {
        $data['compliance']= Compliance::all();
        $data['fairpracticecode'] = Fairpracticecode::find(1);
        $data['integrated'] = Integrated::all();
        $data['interestratepolicy'] = Interestratepolicy::find(1);
        return view('frontend.compliance',$data);
    }
    // public function ombudsmanscheme()
    // {

    //   $data['integrated'] = Integrated::all();
    //     return view('frontend.ombudsmanscheme',$data);
    // }
    public function nachcancellation()
    {
        $data['nachcancellation'] = Nachcancellation::find(1);
        return view('frontend.nachcancellation',$data);
    }
   public function grievanceredressalpolicy()
    {
        $grievance_info=Grievance::find(1);
        return view('frontend.grievance_redressal',compact('grievance_info'));
    }
    // public function interestratepolicy()
    // {
    //     $data['interestratepolicy'] = Interestratepolicy::find(1);
    //     return view('frontend.interest-rate-policy',$data);
    // }
    // public function fairpracticescode()
    // {
    //     $data['fairpracticecode'] = Fairpracticecode::find(1);
    //     return view('frontend.fairpractice',$data);
    // }

    public function career_job(Request $request)
    {
        // $request->validate([
        //     'name'=>"required",
        //     'email'=>"required",
        //     'mobile_number'=>"required",
        //     'current_organization'=>"required",
        //     'current_designation'=>"required",
        //     'preferred_location'=>"required",
        // ]);
        // $check = Career::all();
        // foreach ($check as $row) {
        //   if($row->mobile_number == $request->mobile_number){
        //       return 2;
        //   }
        // }
        $insert = Career::insert([
            'name'=>$request->username,
            'email'=>$request->email,
            'mobile_number'=>$request->mobile_number,
            'current_organization'=>$request->current_organization,
            'current_designation'=>$request->current_designation,
            'preferred_location'=>$request->preferred_locationing,
            'states'=>$request->states,
            'yrs_exp'=>$request->yrs_exp,
            'file'=>$request->fileUpload,
        ]);

// return $request->all();
        return 1;
        // return redirect()->route('we_are_hiring')->with(['msg'=>'Created Successfully']);
    }

    // public function getLocationByStateId(Request $request)
    // {
    //     $stateId=$request->input('stateId');
    //     var_dump($stateId);
    // }


    public function newsroom()
    {

        $data['newsroom'] = Newsroom::orderBy('newsroom_date_org', 'DESC')->get();
        return view('frontend.newsroom',$data);
    }
}
