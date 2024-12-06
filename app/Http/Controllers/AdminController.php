<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function welcome(){
        $event=Category::where('cat_status',1)->get();
        return view('welcome',compact('event'));
    }
}
