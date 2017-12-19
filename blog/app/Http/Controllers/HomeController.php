<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data=User::all();
        return view('home',['alldata'=>$data]);
    }
	public function search(Request $r)
	{
		$uname=$r->t1;
		$data=User::where('fname','like','%'.$uname.'%')->get();
		return view('home',['alldata'=>$data]);
	}
	public function d1($id)
	{
		//echo $id;
		User::destroy($id);
		return redirect('home');
		//$data=User::all();
        //return view('home',['alldata'=>$data]);
	}
	public function show($id)
	{
		
		$data=User::find($id);
        return view('auth/edit_profile',['data'=>$data]);
	}
	public function edit(Request $r)
	{
		$obj=User::find($r->id);
		$obj->fname=$r->fname;
		$obj->lname=$r->lname;
		$obj->uname=$r->uname;
		$obj->email=$r->email;
		$obj->password=$r->password;
		$obj->gen=$r->gen;
		$obj->status=$r->status;
		$obj->cno=$r->cno;
		$obj->dob=$r->dob;
		$obj->save();
		$data=User::all();
        return redirect('home');
	}
}
