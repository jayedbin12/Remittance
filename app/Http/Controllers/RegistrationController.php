<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use session;

class RegistrationController extends Controller
{
    function registration(){
        return view('registration');
    }

    
    function pregistration(Request $request){
        $request->validate(
            ['name' => 'required|min:3|max:50',
             'email' => 'required|email|unique:registrations',
             'phone' => 'required',
             'dob' => 'required|date',
             'nid' => 'required',
             'password' => 'required|min:6|max:7|same:confirm_password',
             'confirm_password' => 'required|min:6'
            ]
        );

        $register = new Registration;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->dob = $request->dob;
        $register->nid = $request->nid;
        $register->password = $request->password; //Hash::make(
        $register->confirm_password = $request->confirm_password;
        $register->save();

        return redirect('login');
    }

        function login(){
            return view('login');
        }
    
  
        public function home(Request $request)
        {
            $data = array();
            if($request->session()->has('register_id')){
                $data = Registration :: where('register_id', $request->session()->get('register_id'))->first();
            }
                // echo "Welcome, ". $request->session()->get('email');
            return view('home', compact('data'));
 
        }
 
       
        public function plogin(Request $request){
 
            $request->validate(
                [
                    'register_id' => 'required',
                    'password' => 'required'
                ]
                );
 
            $registration = Registration :: where('register_id',$request->register_id)
                                ->where('password',$request->password)
                                ->first();
 
            if($registration){
                $request->session()->put('register_id',$registration->register_id);
                return redirect('home');
            }
            else
            echo "User name and Password do not match";
            return view('login'); 
            
        }

        public function logout(){
            session()->forget('register_id');
            return redirect()->route('login');
        }

        public function show(){
            $registration = Registration::all();
            return view('show', compact('registration'));
        }

        public function editAdmin(Request $request){
            $registrations = array();
            if($request->session()->has('register_id')){
                $registrations = Registration :: where('register_id', $request->session()->get('register_id'))->first();
            }
            return view('editAdmin', compact('registrations'));
        }
        // public function editAdmin($register_id){
        //     $registrations = Registration :: where($register_id);
        //     if(is_null($registrations)){
        //         return redirect()->back();
        //     } else{
        //         $registrations = compact('registrations');
        //         return view('editAdmin')->with('registrations');
        //     }
        // }

        public function update($register_id, Request $request){
            $registrations = Registration :: find($register_id);
            $registrations->name = $request->name;
            $registrations->email = $request->email;
            $registrations->phone = $request->phone;
            $registrations->password = $request->password;
            $registrations->save();
            return view('show');
        }
}