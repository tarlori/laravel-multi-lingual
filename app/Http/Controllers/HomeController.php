<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Mailer;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request, $language = null) {
        $uri = '';
        if ($language != config('app')['fallback_locale'] && !empty($language)) {
            $uri = $language;
        }

        $validator = (new Contact)->validator($request->all());

        if ($validator->fails()) {            
            return redirect('/' . $uri)->withInput()->withErrors($validator);
        }

        $mailer = new Mailer;
        $mailer->sendContactEmail($request);

        return redirect('/' . $uri)->with('success', trans('messages.contact.thank_you'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }
}
