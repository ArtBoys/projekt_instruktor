<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login() {
        return view('auth.login');

    }
    public function registration() {
        return  view('auth.registration');
    }

//    public function registerUser(Request $request) {
//       echo 'Value posted';
//    }

    public function registerUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'phone'=>'required',
            'address'=>'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfuly');
        }else {
            return back() ->with('fail', 'Something wrong');

        }
    }

    public function loginUser(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else {
                return back()->with('fail', 'Password not matches');
            }
//
        }else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function dashboard() {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function  logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }




//    public function dashboard() {
//        $data = array();
//        if (Session::has('loginId')) {
//            $data = User::where('email', '=', $request(->email)->first();
//        }
//        return view('dashboard', compact('data'));
//    }
//
//    public function logout() {
//        if()
//    }
}
