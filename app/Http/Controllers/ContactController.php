<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
			$contact_validated = $request->validate([
				'name' => 'required|between:3,60',
				'email' => 'required|email',
				'message' => 'required|between:10,500'
			]);

			Contact::create($contact_validated);

			return redirect('/')->with('message', 'Thank you, we will reach out soon!');

		}
}
