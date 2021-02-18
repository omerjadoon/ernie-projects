<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Silber\Bouncer\Bouncer;
use Auth;
use App\Investment;
use App\User;

class CustomerHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('is_customer')) {
            return abort(401);
        }
       
       $id = Auth::user()->getId();
        $total_investment = Investment::sum('investment_amount');
        $my_investment = Investment::where('user_id', $id)->sum('investment_amount');
             return view('customer/home/index', compact('total_investment','my_investment'));
        //return view('customer/home/index');
        
        
    }
}
