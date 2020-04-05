<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Feedback;

class FeedbackController extends Controller
{
  public function create(Request $request)
      {
        $request->validate([
          'firstname'=>'required',
          'lastname'=> 'required',
          'email' => 'required',
          'phone' => 'required',
          'message' => 'required'


                  ]);
                  $data = new Feedback;
                //  $data = new comment;

            //"new comment", the 'comment' is the model name
            $data->firstname=$request->firstname;
            $data->lastname=$request->lastname;
            $data->email=$request->email;
            $data->phone=$request->phone;
            $data->message=$request->message;
            $data->save();

            if($data)
            {
              $notification=array(
                'messege'=>'Submitted Successfully',
                'alert-type'=>'success'
              );
              return Redirect()->back()->with($notification);
            }
            else
            {
              echo "error!";
            }

        }

    //
}
