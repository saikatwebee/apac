<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Director;
use App\Models\Overview;
use App\Models\Foundersdesk;
use App\Models\Team;

class LoginController extends Controller
{
    

    public function index(){
        return view('admin.index');
        // echo "hi";

    }
    public function logout_admin(){
        return view('auth.login');

    }


   
    
    

    
}
