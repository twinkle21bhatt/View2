<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationApp;

class RegistrationAppController extends Controller
{
    public function formpage()
    {
        return view('userform');
    } 


     public function register(Request $request)
    {  
        $request->validate([
            'name' =>'required',
            'age' =>'required',
            'contact_no' =>'required|contact_no|unique:users',
            'address' =>'required',
            'country' =>'required',
           
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("users");
    }


    public function createUser(array $data)
    {
      return RegistrationApp::create([
        'name' => $data['name'],
        'age' => $data['age'],
        'contact_no' => $data['contact_no'],
        'address' => $data['address'],
        'country'=> $data['country'],
      
      ]);
    }   

    public function show(){
        $users = RegistrationApp:: get();

        return view("users", ['users'=>$users]);
    }

}


