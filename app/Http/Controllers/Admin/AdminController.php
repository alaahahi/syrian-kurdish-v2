<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use App\Models\User;
use App\Models\Session;
use App\Traits\ResponseTrait;
use App\Models\Brand;
use App\Models\Event;
class AdminController extends Controller
{
    use ResponseTrait;
    public function index(): Renderable
    {
        return view('index');
    }
    public function dashboard()
    {
        $user =  User::where('id',auth()->user()->id)->with('wallet')->first();
        $session = Session::with('game')->get();
        //return $this->responseSuccess($session, 'Event List Fetched Successfully !');
        return view('dashboard',compact('user','session'));
    }
    
}
