<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\car;
use App\Models\Reservation;
use App\Models\Review;

class AdminController extends Controller
{
    public function users()
    {
        $data=user::all();
        return view("admin.user",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function car()
    {
        $data=car::all();
        return view("admin.car",compact("data"));
    }
    public function addcar(Request $request)
    {
        $data=new car;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalName();
                $request->image->move('carimage',$imagename);
                $data->image=$imagename;

                $data->model=$request->model;

                $data->price=$request->price;

                $data->capacity=$request->capacity;

                $data->description=$request->description;
                $data->save();
                return redirect()->back();

    }
    public function deletecar($id)
    {
        $data=car::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data=car::find($id);
        return view("admin.updateview", compact("data"));
    }
    public function update(Request $request, $id)
    {
        $data=car::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalName();
                $request->image->move('carimage',$imagename);
                $data->image=$imagename;

                $data->model=$request->model;

                $data->price=$request->price;

                $data->capacity=$request->capacity;

                $data->description=$request->description;
                $data->save();
                return redirect()->back();
    }
    public function reservation(Request $request)
    {
        $data=new reservation;

        
                $data->name=$request->name;

                $data->email=$request->email;

                $data->phone=$request->phone;

                $data->pickup=$request->pickup;

                $data->dropoff=$request->dropoff;

                $data->date=$request->date;

                $data->date1=$request->date1;

                $data->time=$request->time;

                $data->message=$request->message;
                $data->save();
                return redirect()->back();

    }
    public function viewreservation()
    {
        $data=reservation::all();
        return view("admin.adminrerservation",compact("data"));
    }
    public function viewreview()
    {
        $data=review::all();
        return view("admin.review",compact("data"));
    }
}
