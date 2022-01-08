<?php

namespace App\Http\Controllers;

use App\Models\comment;
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
                    ])->orderBy('post_id', 'desc')->get();
            $newdata =[];
                foreach ($posts as $item)
                {
                    $data = [];
                    $comments =  comment::where([
                        ['post_id', '=', $item['post_id']]
                        ])->orderBy('comment_id', 'desc')->get();
                    $cdata = [];
                    $i =0;
                    foreach( $comments as $itm)
                    {
                        $cdata[$i]['post_id'] = $itm['post_id'];
                        $cdata[$i]['comment_id'] = $itm['comment_id'];
                        $cdata[$i]['user_id'] = $itm['user_id'];
                        $cdata[$i]['comment'] = $itm['comment'];
                        $i++;
                    }
                    $data['post_id'] = $item['post_id'];
                    $data['user_id'] = $item['user_id'];
                    $data['title'] = $item['title'];
                    $data['description'] = $item['description'];
                    $data['image'] = $item['attechment'];   
                    $data['comment'] = $cdata;
                    array_push($newdata,$data);
                }
            return view('user-profile',compact('newdata'));           
        } 
        else
        {
            $request->session()->put('loginmessage','Invalid Login Information');
            return redirect('/user-login');
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
        $data['status'] = 'pending';
        $insert = post::create($data);
        if(isset($insert) == true)
        {
            $posts =  post::where([
                ['user_id', '=', $data['user_id']]
                ])->orderBy('post_id', 'desc')->get();        
        
        $newdata =[];
        foreach ($posts as $item)
        {
            $data = [];
            $comments =  comment::where([
                ['post_id', '=', $item['post_id']]
                ])->get();
            $cdata = [];
            $i =0;
            foreach( $comments as $itm)
            {
                $cdata[$i]['post_id'] = $itm['post_id'];
                $cdata[$i]['comment_id'] = $itm['comment_id'];
                $cdata[$i]['user_id'] = $itm['user_id'];
                $cdata[$i]['comment'] = $itm['comment'];
                $i++;
            }
            $data['post_id'] = $item['post_id'];
            $data['user_id'] = $item['user_id'];
            $data['title'] = $item['title'];
            $data['description'] = $item['description'];
            $data['image'] = $item['attechment'];
            $data['comment'] = $cdata;
            array_push($newdata,$data);
        }
    return redirect('user-profile',compact('newdata'));
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
            return redirect('user-register');
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

/* Admin Controls */

    public function admin_user_management(Request $req)
    {
            if($req->session()->get('email') == 'raj@admin.com' && $req->session()->get('password') == 'Raj@123')
            { 
                $user = user_registration::all();
                return view('admin-user-management',compact('user'));
            }
            else
            {
                redirect('/');
            }
    }
    public function admin_user_delete($id)
    {
        $user = user_registration::where([
            ['user_id', '=', $id],
        ])->delete();
        if($user == true)
        {
            $post = post::where([
                ['user_id', '=', $id],
            ])->delete();
            if($post == true)
            {
                $comments = comment::where([
                    ['user_id','=', $id],
                ]);
                if($comments == true)
                {
                    redirect('admin-user-management');
                }
            }
    } 
    }
    public function admin_user_blog_list($id)
    {
        $data =  post::where([
            ['user_id', '=', $id]
            ])->get();
        return view('admin-user-blog-list',compact('data'));
    }
    public function admin_user_blog_status($id)
    {
            $data =  post::where([
            ['post_id', '=', $id]
            ])->get();
            $userid = '';
            $status = '';
            foreach($data as $data)
            {
                $userid = $data['user_id'];
                $status= $data['status'];
            }
            if($status == 'active')
            {
                $update =  post::where([
                ['post_id', '=', $id]
                ])->update(['status' => 'pending']);
                if($update == true)
                {
                    
                    return redirect()->route('admin-user-blog-list', [$userid]);
                }
            }
            else
            {
                $update =  post::where([
                ['post_id', '=', $id]
                ])->update(['status' => 'active']);
                if($update == true)
                {
                    return redirect()->route('admin-user-blog-list', [$userid]);
                }
            }
                
        }
    public function admin_login(Request $req)
    {
        if($req->input('email') == 'raj@admin.com' && $req->input('password') == 'Raj@123')
        {
            $req->session()->put('email','raj@admin.com');        
            $req->session()->put('password','Raj@123');
            return view('admin-home');
        }
        else
        {
            $req->session()->put('loginmessage','Invalid Login Information');
            return redirect('Admin-login');
        }
    }
    public function admin_user_blog(Request $req)
    {
        if($req->session()->get('email') == 'raj@admin.com' && $req->session()->get('password') == 'Raj@123')
        {
            $req->session()->put('email','raj@admin.com');        
            $req->session()->put('password','Raj@123');
            return view('admin-user-blog');
        }
        else
        {
            return redirect('/');
        }
    }
    public function admin_home(Request $req)
    {
        if($req->session()->get('email') == 'raj@admin.com' && $req->session()->get('password') == 'Raj@123')
        {
            $req->session()->put('email','raj@admin.com');        
            $req->session()->put('password','Raj@123');
            return view('admin-home');
        }
        else
        {
            return redirect('/');
        }    
    }
}