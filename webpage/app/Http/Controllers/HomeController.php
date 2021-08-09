<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\usrInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** これがあると下記のサイトへのアクセスにはログインが必要
        *    $this->middleware('auth');
        */

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

    public function battle()
    {
        $user = \Auth::user();
        if($user){
           // dd($user);
            $info = usrInfo::where('user_id', $user['id'])->get();
            return view('battle', ['user' => $info ]);
        }else{
            //dd($user);
            return view('battle');
        }
       
    }

    public function ranking()
    {
        return view('ranking');
    }

    public function deckpost()
    {
        return view('deckpost');
    }
    public function battlehistory()
    {
        return view('battlehistory');
    }


}
