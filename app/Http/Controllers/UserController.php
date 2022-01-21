<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Package;
use App\Models\post;
use App\Models\User;
use App\Models\user_registration;
use App\Models\UserReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $continent = Continent::all();
        $userid = $req->session()->get('user_id');
        $username = user_registration::where('user_id','=',$userid)->get('fname');
        return view('home', compact('continent','username'));
    }
    public function login(Request $request)
    {
        if ($request->session()->get('user_id') != NULL) {
            $userdata = user_registration::where([
                ['user_id', '=',$request->session()->get('user_id')]
            ])->first();
            $posts =  post::where([
                ['user_id', '=', $request->session()->get('user_id')]
            ])->orderBy('post_id', 'desc')->get();
            $newdata = [];
            foreach ($posts as $item) {
                $data = [];
                $comments =  comment::where([
                    ['post_id', '=', $item['post_id']]
                ])->orderBy('comment_id', 'desc')->get();
                $cdata = [];
                $i = 0;
                foreach ($comments as $itm) {
                    $cusername = "";
                    $cuser = user_registration::where([
                        ['user_id', '=', $itm['user_id']]
                    ])->get();

                    $x = 0;
                    foreach ($cuser as $it) {
                        $cusername = $it['fname'] . ' ' . $it['lname'];
                        $x++;
                    }
                    $cdata[$i]['cusername'] = $cusername;
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
                $data['created_at'] = $item['created_at '];
                $data['comment'] = $cdata;
                array_push($newdata, $data);
            }

            return view('user-profile', compact('newdata','userdata'));
        } else {
            $userdata = user_registration::where([
                ['password', '=', $request->password],
                ['email', '=', $request->email]
            ])->first();
            if (isset($userdata)) {
                $request->session()->put('user_id', $userdata['user_id']);
                
                $posts =  post::where([
                    ['user_id', '=', $userdata['user_id']]
                ])->orderBy('post_id', 'desc')->get();
                $newdata = [];
                foreach ($posts as $item) {
                    $data = [];
                    $comments =  comment::where([
                        ['post_id', '=', $item['post_id']]
                    ])->orderBy('comment_id', 'desc')->get();
                    $cdata = [];
                    $i = 0;
                    foreach ($comments as $itm) {
                        $cusername = "";
                        $cuser = user_registration::where([
                            ['user_id', '=', $itm['user_id']]
                        ])->get();

                        $x = 0;
                        foreach ($cuser as $it) {
                            $cusername = $it['fname'] . ' ' . $it['lname'];
                            $x++;
                        }
                        $cdata[$i]['cusername'] = $cusername;
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
                    array_push($newdata, $data);
                }
                return view('user-profile', compact('newdata','userdata'));
            } else {
                $request->session()->put('loginmessage', 'Invalid Login Information');
                return redirect('/user-login');
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function post(Request $req)
    {

        if ($file = $req->file('attechment')) {
            $Filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '\img\post', $Filename);
        }
        $data['user_id'] = $req->input('user_id');
        $data['title'] = $req->input('title');
        $data['description'] = $req->input('description');
        $data['attechment'] = $Filename;
        $data['status'] = 'pending';
        $insert = post::create($data);
        if (isset($insert) == true) {
            return redirect(route('user.login.success'));
        }
    }
    
    public function insertRegister(Request $req)
    {
        $data = user_registration::where([
            ['email', '=', $req->email]
        ])->first();
        if (isset($data)) {
            $req->session()->put('message', 'Email Address is already exist');
            return redirect('user-register');
        } else {
            if ($file = $req->file('profile')) {
                $Filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '\img\profiles', $Filename);
            }
            $data['fname'] = $req->input('fname');
            $data['lname'] = $req->input('lname');
            $data['gender'] = $req->input('gender');
            $data['dob'] = $req->input('year') . '-' . $req->input('month') . '-' . $req->input('day');
            $data['email'] = $req->input('email');
            $data['phone'] = $req->input('phone');
            $data['password'] = $req->input('password');
            $data['images'] = $Filename;
            $data['address'] = $req->input('address');
            $insert = user_registration::create($data);

            if (isset($insert) == true) {
                return view('user-login');
            }
        }
    }

    public function edit_profile($id)
    {
        $data = user_registration::where([
            ['user_id', '=', $id]
        ])->get();
        return view('user-profile-edit', compact('data'));
    }
    public function update_profile(Request $req)
    {
        if ( ($req->file('profile')) != NULL) {
            $file = $req->file('profile');
            $Filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '\img\profiles', $Filename);
            
        }
        else
        {
            $Filename=  $req->input('profile');
        }
        $update1 =  user_registration::where([
            ['user_id', '=', $req->input('user_id')]
        ])->update(['images' => $Filename]);
        
            if($update1 == 1)
            {
                $update = user_registration::where('user_id', $req->input('user_id'))
                    ->update(['fname'=>$req->input('fname')],
                    ['lname'=>$req->input('lname')],
                    ['email'=>$req->input('email')],
                    ['password'=>$req->input('password')],
                    ['phone'=>$req->input('phone')],
                    ['address'=>$req->input('address')]
                );
                if($update == 1)  
                {
                    return redirect(route('user.login.success'));
                }
            }
    }
    public function update_post(Request $req)
    {
        if ( ($req->file('attechment')) != NULL) {
            $file = $req->file('attechment');
            $Filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '\img\post', $Filename);   
        }
        else
        {
            $Filename=  $req->input('attechment');
        }
        $post_id = $req->input('post_id');
        $title = $req->input('title');
        $description = $req->input('description');
        $update1 =  post::where([
            ['post_id', '=', $req->input('post_id')]
        ])->update(['attechment' => $Filename]);
            if($update1 == 1)
            {
                $update2 =  post::where([
                    ['post_id', '=', $post_id]
                ])->update(['title' => $title,
                'description' => $description
            ]);
            }
            return redirect(route('user.login.success'));
    }

    public function blogs_page()
    {
         $blogs = post::where([
            ['status','=','active']
        ])->paginate(3);
        return view("Blogs-page",compact('blogs'));
    }
    public function read_blogs_page($id)
    {
        $blog = post::where([
            ['post_id','=',$id]
        ])->get();
    foreach($blog as $blogs)
    {
        $blogid =$blogs['post_id'];
        $userid =$blogs['user_id'];
    }
    $user = user_registration::where([
        ['user_id','=',$userid]
    ])->get();
        $comments =  comment::where([
            ['post_id', '=', $blogid]
        ])->orderBy('comment_id', 'desc')->get();
        $cdata = [];
        $i = 0;
        foreach ($comments as $itm) {
            $cusername = "";
            $images="";
            $cuser = user_registration::where([
                ['user_id', '=', $itm['user_id']]
            ])->get();
            $x = 0;
            foreach ($cuser as $it) {
                $cusername = $it['fname'] . ' ' . $it['lname'];
                $images = $it['images'];
                
            }
            $cdata[$i]['images'] = $images;
            $cdata[$i]['cusername'] = $cusername;
            $cdata[$i]['post_id'] = $itm['post_id'];
            $cdata[$i]['comment_id'] = $itm['comment_id'];
            $cdata[$i]['user_id'] = $itm['user_id'];
            $cdata[$i]['comment'] = $itm['comment'];
            $i++;
        }
        return view('single-blog',compact('blog','cdata','user'));
    }

    public function post_comment(Request $req)
    {
        $data['post_id']  = $req->input('post_id');
        $data['user_id'] = $req->input('user_id');
        $data['comment'] = $req->input('comment');
        $insert = comment::create($data); 
        if($insert == TRUE)
        {
            return redirect(route('read-blogs-page',$data['post_id']));
        }
        
    }

    /* Admin Controls */

    public function admin_user_management(Request $req)
    {

        $user = user_registration::all();
        return view('admin-user-management', compact('user'));
    }
    public function admin_user_blog_list(Request $req, $id)
    {
        $data =  post::where([
            ['user_id', '=', $id]
        ])->get();
        return view('admin-user-blog-list', compact('data'));
    }
    public function admin_user_blog_status($id)
    {
        $data =  post::where([
            ['post_id', '=', $id]
        ])->get();
        $userid = '';
        $status = '';
        foreach ($data as $data) {
            $userid = $data['user_id'];
            $status = $data['status'];
        }
        if ($status == 'active') {
            $update =  post::where([
                ['post_id', '=', $id]
            ])->update(['status' => 'pending']);
            if ($update == true) {

                return redirect()->route('admin-user-blog-list', [$userid]);
            }
        } else {
            $update =  post::where([
                ['post_id', '=', $id]
            ])->update(['status' => 'active']);
            if ($update == true) {
                return redirect()->route('admin-user-blog-list', [$userid]);
            }
        }
    }
    public function admin_users_blog_status($id)
    {
        $data =  post::where([
            ['post_id', '=', $id]
        ])->get();
        $userid = '';
        $status = '';
        foreach ($data as $data) {
            $userid = $data['user_id'];
            $status = $data['status'];
        }
        if ($status == 'active') {
            $update =  post::where([
                ['post_id', '=', $id]
            ])->update(['status' => 'deactive']);
            if ($update == true) {

                return redirect()->route('admin-user-blog');
            }
        } else {
            $update =  post::where([
                ['post_id', '=', $id]
            ])->update(['status' => 'active']);
            if ($update == true) {
                return redirect()->route('admin-user-blog');
            }
        }
    }

    public function admin_user_blog_read($id)
    {
        $data = post::where([
            ['post_id', '=', $id]
        ])->get();
        return view('admin-user-blog-read', compact('data'));
    }
    public function admin_user_blog(Request $req)
    {
        $req->session()->put('email', 'raj@admin.com');
        $req->session()->put('password', 'Raj@123');
        $data = post::orderBy('post_id', 'desc')->get();
        $newdata = [];
        foreach ($data as $item) {
            $datass['post_id'] = $item['post_id'];
            $datass['user_id'] = $item['user_id'];
            $datass['title'] = $item['title'];
            $datass['description'] = $item['description'];
            $datass['image'] = $item['attechment'];
            $datass['image'] = $item['attechment'];
            $datass['status'] = $item['status'];
            $author = user_registration::where([
                ['user_id', '=', $item['user_id']],
            ])->get();
            $authorname = [];
            $i = 0;
            foreach ($author as $item) {
                $authorname[$i++]['name'] = $item['fname'] . ' ' . $item['lname'];
            }
            $datass['authorname'] = $authorname;
            array_push($newdata, $datass);
        }
        return view('admin-user-blog', compact('newdata'));
    }
    public function admin_home(Request $req)
    {
        if ($req->session()->get('email') == 'raj@admin.com' && $req->session()->get('password') == 'Raj@123') {
            $req->session()->put('email', 'raj@admin.com');
            $req->session()->put('password', 'Raj@123');
            return view('admin-home');
        } else {
            return redirect('/');
        }
    }
    public function apis()
    {
        $author = user_registration::all();
        return $author;
        // return response()->json(['author'=>$author],200);
    }
    public function delete_post($id)
    {
        $delete =  post::where([
            ['post_id', '=', $id]
        ])->delete();
        if (isset($delete)) {
            return redirect(route('user.login.success'));
        }
    }
    public function edit_post(Request $request,$id)
    {
        // return view('user-edit-post');
        $post = post::where([
            ['post_id', '=', $id],
        ])->get();
        $userdata = user_registration::where([
            ['user_id', '=', $request->session()->get('user_id')],
        ])->get();
        return view('user-edit-post',compact('userdata','post'));
    }
    public function store_package(Request $req)
    {

        $data['pack_title'] = $req->input('pack_title');
        $data['origin'] = $req->input('origin');
        $data['destination'] = $req->input('destination');
        $data['days'] = $req->input('days');
        $data['nights'] = $req->input('nights');
        $data['price'] = $req->input('price');
        $data['policy'] = $req->input('policy');
        $data['activity'] = $req->input('activity');
        $data['dayplanning'] = $req->input('dayplaning');
        $data['poster_image'] = $req->input('poster_image');
        $data['start_date'] = $req->input('start_date');
        $data['end_date'] = $req->input('end_date');
        $data['status'] = 'active   ';
        if ($file = $req->file('poster_image')) {
            $Filename = time() . '.' . $file->getClientOriginalExtension();
            // $file->move(public_path() . '\img\package', $Filename);
        }
        $data['poster_image'] = $Filename;
        // $insert = Package::create($data);
        // $id = $insert->id;
        return $data;
    }
}