<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview() {

        return view('admin.add_doctor');
    }

    public function upload(Request $request) {

        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->number;

        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        $doctor->save();

        return redirect()->back()->with('message', 'Doktor dodany sukces');

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

    public function showdoctor() {

        $data= doctor::all();

        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id) {

        $data= doctor::find($id);
        $data->delete();
        return redirect()->back();


    }

    public function udpatedoctor($id) {

        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function edditdoctor(Request $request, $id) {

        $doctor = doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;

        $doctor->speciality=$request->speciality;

        $doctor->room=$request->room;

        $image=$request->file;

        if($image) {


        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;

        }



        $doctor->save();

        return redirect()->back()->with('message', 'Profil zaaktualizowany');

    }
}
