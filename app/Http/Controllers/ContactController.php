<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
    {
      $contacts = Contact::get();

      return view('contacts.index', [
        'contacts' => $contacts
      ]);
    }

    public function store(Request $request) 
    {
      $this->validate($request, [
        'name' => 'required|min:2||max:255',
        'email' => 'required|email|min:2|max:255',
        'phone' => 'required|min:10|max:255',
      ]);

      // dd($request);
      // dd($request->only('name', 'country', 'email', 'city'));

      Contact::create([
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      // 'country' => $request->country,
      'city' => $request->city,
      'state' => $request->state,
      'zip_code' => $request->zip_code,
    ]);

    return back();
  }

  public function destroy(Contact $contact) {
    $contact->delete();
    return back();
  }

  public function edit(Contact $contact) {
    return view('contacts.edit', [
      'contact' => $contact
    ]);
  }

  public function update(Contact $contact, Request $request) {
    $data = $this->validate($request, [
      'name' => 'required|min:2||max:255',
      'email' => 'required|email|min:2|max:255',
      'phone' => 'required|min:10|max:255',
    ]);

    $contact->update($data);

    $contacts = Contact::get();

    return view('contacts.index', [
      'contacts' => $contacts
    ]);
  }
}
