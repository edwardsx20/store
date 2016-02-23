<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Http\Controllers\StoreController;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function cart()
    {
        $cartproducts = $this->getCartProducts(); 
        return view('pages.cart');
    }

    private function getCartProducts(){
        $id = Auth::user()->id;

        //DB::table('')

        return null;
    }
}
