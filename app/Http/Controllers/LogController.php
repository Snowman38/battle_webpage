<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class LogController extends Controller
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
    public function setting()
    {
        return view('setting');
    }

    public function search()
    {
        $user = \Auth::user();
        $opponent = usrInfo::where('user_id', $user['id'])->get();
        return view('home');
    }


}
