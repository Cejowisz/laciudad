<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function storeContact(Request $request)
    {
        return response()->json([
            'feedback' => 'Hello Im here'
        ]);
        $this->validate($request, [
            'name'      =>  'required|string|min:3',
            'company_name'  => 'nullable|string|max:60',
            'phone'     =>  'nullable|string|max:15',
            'email'     =>  'required|email',
            'how'       =>  'nullable|string|max:50',
            'message'   =>  'required|string|min:10|max:200'
        ]);


        $contact = new Contact;

        $contact->name  = $request->name;
        $contact->company_name  = $request->company_name;
        $contact->phone =   $request->phone;
        $contact->email = $request->email;
        $contact->how   = $request->how;
        $contact->message = $request->message;

        if ($contact->save()){
            return response()->json([
                'feedback' => 'Contact form successful submitted'
            ]);
        }
        return response()->json([
            'feedback' => 'Contact form NOT successful submitted'
        ]);


        $data = [
            'name'      => $request->name,
            'company_name' => $request->company,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'how'       => $request->how,
            'mesage' => $request->message,
            'subject' => 'Contact From The Mall',
        ];

        $data1 = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ];

        Mail::send('emails.feedback', $data1, function($message) use ($data1){
            $message->from('info@wiseman.com');
            $message->to($data1['email']);
            $message->subject($data1['subject']);
        });

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from('info@wisema.com');
            $message->to('info@wiseman.com');
            $message->bcc('cjustinobi@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('message', 'Mail sent successfully');

        return back();
    }

}
