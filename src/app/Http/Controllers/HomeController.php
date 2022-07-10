<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $instructor = instructor::all();
                return view('dashboard', compact('instructor'));
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

            $instructor = instructor::all();
            return view('index.home', compact('instructor'));
        }


    }


    public function aboutUs() {
        $instructor = instructor::all();
        return view('about.home', compact('instructor'));
    }
    public function instructors() {
        $instructor = instructor::all();
        return view('instructors.home', compact('instructor'));
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

        $data->data=$request->date;

        $data->phone=$request->phone;

        $data->message=$request->message;

        $data->instructor=$request->instructor;

        $data->status='Przetwarza';

        if(Auth::id()) {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Rezerwacja dokonana - Skonaktujemy się z Tobą wkrótce');

    }




}
