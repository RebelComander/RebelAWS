<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactForm;
use App\Mail\ContactEmailSent;

class ContactController extends Controller
{
    /*public function send(Request $request)
    {
    	//todo send email
    	// return "sent";
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$message = $request->input('message');

    	Mail::send('emails.contact', ['name01' => $name, 'email01' => $email, 'message01' => $message], function ($message)
        {

            $message->from('robert18hatfield@gmail.com', 'Robert Hatfield');

            $message->to('robert18hatfield@gmail.com');

            //Add a subject
            $message->subject("Test Email");

        });
        return "Sent";
    }*/

    public function test()
    {
    	$test = ContactForm::find(100);

    	dd($test);
    	return ;
    }

    public function send(Request $request)
    {
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$message = $request->input('message');

    	//dd($message);

    	// $test =['name' => $name,
    	// 	'email' => $email,
    	// 	'message' => $message];

    	// 	dd($test);

    	$contactForm = new ContactForm();
    	$contactForm->name = $name;
    	$contactForm->email = $email;
    	$contactForm->message = $message;
    	$contactForm->save();

// dd($contactForm);

    	// $contactForm = ContactForm::create([
    	// 	'name' => $name,
    	// 	'email' => $email,
    	// 	'message' => 'tester2w2'
    	// ]);
    	// dd($contactForm);

     //    $contactForm =  contactForm::findOrFail(100);

        // Ship order...


        $user = new \StdClass;
        $user->name = 'Robert';
        $user->email = 'robert18hatfield@gmail.com';

        Mail::to($user)->send(new ContactEmailSent($contactForm));

        return json_encode("done");
    }
}
