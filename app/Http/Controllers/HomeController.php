<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function absen(Request $request){
        $user_id = Auth::user()->id;
        $date = date("Y-m-d");
        $time = date("H-i-s");
        $note = $request->note;
        if( isset($request->masuk)) {
            return "absen masuk";
        } elseif (isset($request->keluar)) {
            return "absen keluar";
        }
        return $request->all();
    }
}
