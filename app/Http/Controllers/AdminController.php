<?php

namespace App\Http\Controllers;

use App\Models\BriefForm;
use App\Models\ContactForm;
use App\Models\PopupForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function dashboard()
    {
        $entries = ContactForm::all(); // Fetch all entries from the contact_form table
        $columns = Schema::getColumnListing('contact_form'); // Get column names

        return view('backend.admin.dashboard', compact('entries', 'columns')); // Pass data to the view
    }

    public function popup()
    {
        $entries = PopupForm::all(); // Fetch all entries from the contact_form table
        $columns = Schema::getColumnListing('popup_forms'); // Get column names

        return view('backend.admin.popup', compact('entries', 'columns')); // Pass data to the view
    }

    public function briefpage(){
        $entries = BriefForm::all();
        $columns = Schema::getColumnListing('brief');

        return view('backend.admin.briefpage', compact('entries', 'columns'));
    }

    public function destroy($id)
    {
        $entry = ContactForm::findOrFail($id); // Find the entry by ID
        $entry->delete(); // Delete the entry

        return redirect()->route('backend.admin.dashboard')->with('success', 'Entry deleted successfully.'); // Redirect with success message
    }

}
