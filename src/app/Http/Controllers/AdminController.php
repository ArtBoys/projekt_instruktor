<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Appointment;

class AdminController extends Controller
{


    public function addview() {

        return view('admin.add_instructor');
    }

    public function upload(Request $request) {

        $instructor=new instructor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('instructorimage', $imagename);

        $instructor->image=$imagename;

        $instructor->name=$request->name;

        $instructor->phone=$request->number;

        $instructor->place=$request->place;

        $instructor->category=$request->category;

        $instructor->save();

        return redirect()->back()->with('message', 'Instruktor dodany sukces');

    }



    public function  showappointment() {

        $data=appointment::all();


        return view('admin.showappointment', compact('data'));
    }

    public function zatwiedzony($id) {

        $data=appointment::find($id);

        $data->status='zatwiedzony';

        $data->save();

        return redirect()->back();

    }

    public function cancel($id) {

        $data=appointment::find($id);

        $data->status='Anulowany';

        $data->save();

        return redirect()->back();

    }

    public function showinstructor() {

        $data= instructor::all();

        return view('admin.showinstructor', compact('data'));
    }

    public function instructor() {

        $data= instructor::all();

        return view('admin.showinstructor', compact('data'));
    }


    public function deleteinstructor($id) {

        $data= instructor::find($id);
        $data->delete();
        return redirect()->back();
    }




    public function udpateinstructor($id) {

        $data = instructor::find($id);
        return view('admin.update_instructor', compact('data'));
    }

    public function edditinstructor(Request $request, $id) {

        $instructor = instructor::find($id);

        $instructor->name=$request->name;

        $instructor->phone=$request->phone;

        $instructor->category=$request->category;

        $instructor->place=$request->place;

        $image=$request->file;

        if($image) {


        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('instructor', $imagename);

            $instructor->image=$imagename;

        }



        $instructor->save();

        return redirect()->back()->with('message', 'Profil zaaktualizowany');

    }
}
