<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Contact extends Model
{
   /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        $messages = [];

        $array = [
            'first_name'  => 'required|max:255',
            'last_name'  => 'required|max:255',
            'email'  => 'required|email|max:255',
            'photo' => 'mimes:jpeg,bmp,png,jpg,gif',
            'message'  => 'required',
        ];

        return $validator = Validator::make($data, $array, $messages);
    }
}
