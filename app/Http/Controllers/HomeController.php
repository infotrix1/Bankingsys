<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = auth()->user();
        return view('home', ["data"=>$data]);
    }

    public function wallet()
    {
        return view('wallet');
    }

    public function trans()
    {
        $user = auth()->user();

        $id=$user->id;
        $data = DB::table('payments')->where('user_id',$id)->select('*')->get();
       // dd($d);
        return view('trans', ["data"=>$data]);
    }
}
