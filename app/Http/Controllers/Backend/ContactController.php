<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
//   public function index() {
//       $address = Contact::first();
////       dd($address->toArray());
////        return view('backend.contacts.index');
//    }
//
//    public function create() {
////        return view('backend.contact.create');
//    }
//
//    public function store(Request $request) {
////        return redirect()->route('admin.contacts.index');
//    }
//
//    public function show($id) {
////        return view('backend.contact.show');
//    }
    public function edit($id) {
        $contact = Contact::first();
        return view('backend.contacts.edit', compact('contact'));
    }
    public function update(Request $request, $id) {
        
        $this->validate($request, [
            'address' => 'required',
            'phone_no' => 'required',
            'working_hour' => 'required'
        ]);
        
        $updateAddress = Contact::find($id);
        $updateAddress->address = $request->address;
        $updateAddress->phone_no = $request->phone_no;
        $updateAddress->working_hour = $request->working_hour;
        $updateAddress->save();
        
        return redirect()->route('admin.contacts.edit', ['id'=>$id]);
    }

    public function destroy($id) {
    }
}
