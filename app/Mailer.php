<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Mail;
use Illuminate\Http\Request;

class Mailer extends Model
{
    protected $from_email = '';
    protected $from_name = '';

    public function __construct()
    {
        $this->from_email = config('mail')['from']['address'];
        $this->from_name = config('mail')['from']['name'];
    }

    /**
     * [sendContactEmail description]
     * @param  Request $request [description]
     */
    public function sendContactEmail(Request $request)
    {
        Mail::send('emails.contact', ['request' => $request], function ($mail) use ($request) {
            $mail->from($request->email, $request->first_name . ' ' . $request->last_name);
            $mail->to(config('mail')['contact_email'], 'Admin')->subject('LorandTar - Contact Message.');
            $mail->bcc('tarlorand@gmail.com');

            if ($request->hasFile('photo')) {
                $mail->attach($request->file('photo')->getRealPath(), array(
                    'as'    => $request->file('photo')->getClientOriginalName(), 
                    'mime'  => $request->file('photo')->getMimeType()));
            }
        });
    }
}
