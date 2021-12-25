<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use App\Models\post;
use App\Models\User;
use App\Models\user_registration;
use App\Models\UserReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 
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
        if(isset($data))
        {
            $request->session()->put('user_id', $data['user_id']);
            $request->session()->put('fname', $data['fname']);
            $request->session()->put('lname', $data['lname']);
            $request->session()->put('gender', $data['gender']);
            $request->session()->put('dob', $data['dob']);
            $request->session()->put('email', $data['email']);
            $request->session()->put('phone', $data['phone']);
            $request->session()->put('password', $data['password']);
            $request->session()->put('images', $data['images']);
            $request->session()->put('address', $data['address']);
            
            $posts =  post::where([
                ['user_id', '=', $data['user_id']]
                ])->get();
            return view('user-profile',compact('posts'));            

        }
        else
        {
            $request->session()->put('loginmessage','Invalid Login Information');        
            return view('user-login');

        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');       
    }

    public function post(Request $req )
    {
        if($file = $req->file('attechment')) 
        {
            $Filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '\img\post', $Filename);
        }
        $data['user_id'] = $req->input('user_id');
        $data['title'] = $req->input('title');
        $data['description'] = $req->input('description');
        $data['attechment'] = $Filename;

        $insert = post::create($data);
        if(isset($insert) == true)
        {
            $posts =  post::where([
                ['user_id', '=', $data['user_id']]
                ])->get();
            return view('user-profile',compact('posts'));
        }
    }


    public function insertRegister(Request $req)
    {
        $data = user_registration::where([
            ['email', '=', $req->email]
        ])->first();  
        if(isset($data))
        {
            $req->session()->put('message','Email Address is already exist');        
            return view('user-register');
        }
        else
        {
            if ($file = $req->file('profile')) 
            {
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
   
}
