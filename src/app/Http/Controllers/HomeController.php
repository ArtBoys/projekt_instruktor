<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('dashboard', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }

    }
    public function index() {

        if (Auth::id()) {
            return redirect('index.home');
        }
        else {

            $doctor = doctor::all();
            return view('index.home', compact('doctor'));
        }


    }


    public function aboutUs() {
        $doctor = doctor::all();
        return view('about.home', compact('doctor'));
    }
    public function doctors() {
        $doctor = doctor::all();
        return view('doctors.home', compact('doctor'));
    }
    public function contact() {
        return view('contact.home');
    }

    public function login() {
        return view('/login');

    }
    public function registration() {
        return  view('auth.registration');
    }

    public function  appointment(Request $request) {

        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status='Przetwarza';

        if(Auth::id()) {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Wizyta umówiona - Skonaktujemy się z Tobą wkrótce');







    }




}