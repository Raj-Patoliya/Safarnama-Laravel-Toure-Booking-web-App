<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use App\Models\User;
use App\Models\user_registration;
use App\Models\UserReg;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continent = Continent::all();
        return view('home', compact('continent'));
    }
    public function login(Request $request)
    {
        $data = user_registration::where([
            ['password', '=', $request->password],
            ['email', '=', $request->email]
        ])->first();  
        
        return $data;   
    }
    public function inertRegister(Request $req)
    {
        if ($file = $req->file('profile')) {

            $Filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '\img\profiles', $Filename);
        }
        $data['fname'] = $req->input('fname');
        $data['lname'] = $req->input('lname');
        $data['gender'] = $req->input('gender');
        $data['dob'] = $req->input('year').'-'.$req->input('month').'-'.$req->input('day');
        $data['email'] = $req->input('email');
        $data['phone'] = $req->input('phone');
        $data['password'] = $req->input('password');
        $data['images'] = $Filename;
        $data['address'] = $req->input('address');
        $insert = user_registration::create($data);
        if(isset($insert) == true)
        {
            return view('user-login');
        }
        
        
    }
   
}
