<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    protected $mail_addr = "";
    function ContactMail(Request $request){
        try {
            Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'msg' => ['required'],
            ])->validate();

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'msg' => $request->msg,
            ];

            Mail::send("emails.ContactMail", $data, function ($message) use ($request) {
                $message->to($this->mail_addr);
                $message->subject("Safety Signs Contact Message | Sender -> " . $request->name);
            });

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Mail başarılı bir şekilde gönderilmiştir.',
                ]
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Mail gönderimi başarısız olmuştur.',
                    'data' => $e->getMessage()
                ]
            );
        }
    }

    function PaymentResponseMail(){
        # TODO
        # SEND MAIL TO CUSTOMER
        # SEND MAIL TO STAKEHOLDER
    }
}
