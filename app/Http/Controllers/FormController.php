<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\Briefform;
use App\Models\PopupForm;

class FormController extends Controller
{
    public function contactform(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'nullable|string',
        ]);

        $contact = new ContactForm;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        // dd($contact);
        $contact->save();
        // Process the data (e.g., sending email)

        return response()->json(['success' => 'Data saved successfully.']);
    }

    public function briefform(Request $request)
    {
        $request->validate([
            'briefValues' => 'required|array|min:8',
            'briefValues.*'=>'required|string'
        ]);

        $briefValues = $request->input('briefValues');
        $brief = new Briefform;
        $brief->businessname = $briefValues[0];
        $brief->businessslogan = $briefValues[1];
        $brief->icon = $briefValues[2];
        $brief->industry = $briefValues[3];
        $brief->logostyle = $briefValues[4];
        $brief->logotype = $briefValues[5];
        $brief->colortheme = $briefValues[6];
        $brief->fontstyle = $briefValues[7];
        $brief->quantity = $briefValues[8];

        $brief->save();
        return back()->with('success', 'Thank you for your message!');
    }

    public function popupform(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'requirement' => 'required|string',
        ]);

        $requestData = $request->all();
        PopupForm::create($requestData);

        return response()->json(['success' => 'Data saved successfully.']);
    }
}
