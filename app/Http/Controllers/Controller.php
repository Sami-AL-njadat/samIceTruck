<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMail;
class Controller extends BaseController
{
    


    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
             'email' => 'required|email|max:255',
            'messageContent' => 'required|string',
            'phone' => 'required|string|regex:/^\+?[0-9\s\-]*$/|max:16|min:4',
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->errors()
            ], 422);
        }

        $validatedData = $validator->validated();

        $recipients = [
            'info@idextelecom.com.sa',
        ];

        Mail::to($recipients)->send(new ContactMail($validatedData));

        return response()->json(['message' => 'Email sent successfully!'], 200);
    }
}
