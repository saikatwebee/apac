<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Mime\Email;
use Illuminate\Console\Scheduling\Schedule;
use App\Models\Loanform;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class MailController extends Controller implements FromCollection
{
    public function collection()
    {
        return Loanform::all();
    }
    public function txt_mail($name,$pincode,$mobile)
    {
        $info = array(
            'name' => "Test"
        );
        Mail::send([], $info, function ($message)
        {
            $arr = DB::table('loanform')->select('id')->get();
             $contents = Excel::raw($arr,'users.xlsx');
            $message->to('pavan.bogara@apacfin.com', 'Test')
                ->subject('Website Enquiry - TEST');
            // $message->attach('D:\laravel_main\laravel\public\uploads\pic.jpg');
            $FetchData = DB::select('select * from students');
            foreach ($FetchData as $Data) {
                dd($Data->class);
            }
            $message->html("<html><h1>sdfsd</h1></html>");
            //$message->attach($contents);
            $message->from('no_reply@apacfin.com');
            // $message->attachData($contents, 'users.xlsx');

        });
    }

    public static function attached_mail()
    {

        $info = array(
            'name' => "Test"
        );
        
        Mail::send([], $info, function ($message)
        {
            Excel::store(new MailController, 'users.xlsx');
            $message->to(['pavan.bogara@apacfin.com'], 'Test')
                ->subject('Website Enquiry - TEST');
            $message->attach('C:\xampp\htdocs\apac\storage\app\users.xlsx');
            $message->html("<html><h5> Dear Madam,</h5><p>Please find the above attachment for website enquiries.<br/><b>(This is an automated mail, daily once in a day you will receive the data with attached mail and shared data is dummy, kindly ignore the same.)</b></p></html>");
            $message->from('no_reply@apacfin.com');
        });
        echo "Successfully sent the email";
    }

 
 }
