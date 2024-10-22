<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobsController extends AdminController
{
    public function start(){
        try{
            
            $this->queue('work');

            return redirect()->back()->with(['success' => "Queues Started Successfully"]);

        }catch(\Exception $e){

            return redirect()->back()->with(['danger' => $e->getMessage()]);
            
        }

    }

    public function resend($id){
        try{
            $input = [];
            $input['uuid'] = $id;
            $validator = Validator::make($input, [
                'uuid' => 'required','exists:failed_jobs,uuid',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with(array('errors' => $validator->getMessageBag()->toArray()));
            }

            $this->queue('retry '.$input['uuid']);

            return redirect()->back()->with(['success' => "Resended Successfully"]);

        }catch(\Exception $e){

            return redirect()->back()->with(['danger' => $e->getMessage()]);
            
        }

    }
}
