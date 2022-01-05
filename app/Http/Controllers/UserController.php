<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Payment;

class UserController extends Controller
{
    public function addreview(Request $request)
    {
        $data=new review;

        
                $data->name=$request->name;

                $data->phone=$request->phone;

                $data->rating=$request->rating;

                $data->message=$request->message;
                $data->save();
                return redirect()->back();

    }
    public function review()
    {
        return view("user.review");
    }
    public function addpayment(Request $request)
    {
        $data=new payment;

        
                $data->name=$request->name;

                $data->email=$request->email;

                $data->phone=$request->phone;

                $data->card=$request->card;

                $data->expirydate=$request->expirydate;
                $data->save();
                return redirect()->back();

    }
    public function payment()
    {
        return view("user.payment");
    }
}
