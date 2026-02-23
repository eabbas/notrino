<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactUs;
class ContactUsController extends Controller
{
    public function create()
    {
        $contactUs = contactUs::all();
        // dd($contactUs);
        return view('admin.contactUs.create' , ['contactUs'=> $contactUs]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        contactUs::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
       return to_route('contactUs.list');
    }
    public function index()
    {
        $contactUs = contactUs::all();
        return view('admin.contactUs.index' , ['contactUs'=>$contactUs]);
    }
    public function edit(contactUs $contact)
    {
        // dd($contact);
        return view('admin.contactUs.edit' , ['contact'=>$contact]);
    }
    public function update(Request $request)
    {
        $contactUs = contactUs::find($request->id);
        $contactUs->title = $request->title;
        $contactUs->description = $request->description;

        $contactUs->save();
        return to_route('contactUs.list');
    }
    public function delete(contactUs $contact)
    {
        $contact->delete();
        return to_route('contactUs.list');
    }
}
