<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ContactMail;
use App\Models\FailedJobs;
use App\Models\Jobs;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class EmailSettingsController extends AdminController
{

    public function updateSmtp(Request $request){
        try{
            Validator::make($request->all(), [
                // 'language_id'=> ['required', 'exists:laguages,id', 'integer', 'max:60'],
                'smtp_host'=> ['required', 'string'],
                'smtp_port'=> ['required','string'],
                'smtp_encryption'=> ['required','string'],
                'smtp_username'=> ['required','string'],
                'smtp_password'=> ['required','string'],
                'smtp_from_email'=> ['required','email'],
                'smtp_from_name'=> ['required','string'],
            ])->validate();

            config([
                'mail.default'=> "smtp",
                'mail.mailers.smtp.host'=>  $request->smtp_host,
                'mail.mailers.smtp.port'=>  $request->smtp_port,
                'mail.mailers.smtp.encryption'=>  $request->smtp_encryption,
                'mail.mailers.smtp.username'=>  $request->smtp_username,
                'mail.mailers.smtp.password'=>  $request->smtp_password,
                'mail.from.address' => $request->smtp_from_email,
                'mail.from.name' => $request->smtp_from_name,
            ]);

            $data = [
                'sender_name' => "Test Mail Adter changing SMTP Informations",
                'sender_email' => $request->smtp_from_email,
                'title' => "Test SMTP",
                'body' => "HERE WE ARE => ".$request['smtp_host']." , ".$request['smtp_port']." , ".$request['smtp_encryption']
                ." , ".$request['smtp_username']." , ".$request['smtp_password']." , ".$request['smtp_from_email']
                ." , ".$request['smtp_from_name']." => SMTP NEW INFORMATIONS."
            ];

            try{
                Mail::to(Auth::guard('admin')->user()->email)->send(new ContactMail($data));
            }catch (\Exception $e){
                return response()->json([
                    "status" => false,
                    "message" => $e->getMessage()
                ]);
            }

            $input = [            
                'value' => json_encode(
                [
                    'smtp' => [
                        'smtp_host' => $request->smtp_host,
                        'smtp_port' => $request->smtp_port,
                        'smtp_username' => $request->smtp_username,
                        'smtp_password' => $request->smtp_password,
                        'smtp_encryption' => $request->smtp_encryption,
                        'smtp_from_email' => $request->smtp_from_email,
                        'smtp_from_name' => $request->smtp_from_name
                    ]
                ],true)];

            Settings::find(3)->update($input);

            return response()->json([
                "status" => true,
                "message" => "SMTP Settings Updated Successfully"
            ]);

        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);

        }
    }

    public function getJobs(){
        $datas = Jobs::all();

        return DataTables::of($datas)
        ->editColumn('uuid', function (Jobs $data) {
            return json_decode($data->payload,true)['uuid'];
        })
        ->editColumn('queue', function (Jobs $data) {
            return $data->queue;
        })
        ->editColumn('created_at', function (Jobs $data) {
            return $data->created_at;
        })
        ->toJson();
    }

    public function getFailedJobs(){
        $datas = FailedJobs::all();

        return DataTables::of($datas)
        ->editColumn('uuid', function (FailedJobs $data) {
            return $data->uuid;
        })
        ->editColumn('connection', function (FailedJobs $data) {
            return $data->connection;
        })
        ->editColumn('queue', function (FailedJobs $data) {
            return $data->queue;
        })
        // ->addColumn('exception', function (FailedJobs $data) {
            
        //     return '<a class="btn btn-light"> ' . __("Error") . '</a>';
        // })
        ->editColumn('failed_at', function (FailedJobs $data) {
            return $data->failed_at;
        })
        ->addColumn('resend', function (FailedJobs $data) {
            
            return '<a class="btn btn-success" href="'.route('admin.resendfailedjob',$data->uuid).'"> ' . __("Resend") . '</a>';
        })
        ->rawColumns(['exception','resend'])
        ->toJson();
    }
}
