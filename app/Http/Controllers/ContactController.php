<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
    //    dd($req);
    //    $validation = $req->validate([
    //         'name' => 'required|min:5|max:30',
    //         'phone' => 'required',
    //    ]);

        $contact = new Contact();

        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение было добавлено');

    }

    public function allContactData()
    {
        // $contact = new Contact();
        return view('all_messages',['data' => Contact::all()]);
        // return view('all_messages',['data' => [$contact->find(2)]]);
        // return view('all_messages',['data' => $contact->inRandomOrder()->get()]);
        // return view('all_messages',['data' => $contact->where('name','=', 'фывфывфывфыв')->get()]);
        // return view('all_messages',['data' => $contact
        //                                 ->orderBy('id','desc')
        //                                 ->take(1)
        //                                 ->get()
        //                             ]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact();
        return view('single-message',['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact();
        return view('update-message',['data' => $contact->find($id)]);
    }
    public function updateMessageSubmit($id, ContactRequest $req)
    {

        $contact = Contact::find($id);

        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-single', $id)->with('success', 'Сообщение было изменено');
    }
    public function deleteMessage($id)
    {
       

        Contact::find($id)->delete();

   
        return redirect()->route('contact-data', $id)->with('success', 'Сообщение было изменено');
    }
}
