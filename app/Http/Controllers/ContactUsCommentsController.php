<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs_comments;
use Illuminate\Support\Facades\Auth;

class ContactUsCommentsController extends Controller
{
    public function store(Request $request)
    {
        // dd(Auth::id());
        contactUs_comments::create([
            'name'=>$request->name,
            'family'=>$request->family,
            'email'=>isset($request->email) ? $request->email : null,
            'phoneNumber'=>$request->phoneNumber,
            'comment'=>$request->comment,
            'user_id'=>Auth::id()
        ]);
        return redirect()->route('contactUs.userIndex')->with('message', 'نظر شما با موفقیت ثبت شد');
    }
}
