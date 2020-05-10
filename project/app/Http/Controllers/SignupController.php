<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class SignupController extends Controller
{
    
    public function index(Request $req){
    	return view('signup.index');
    }
    public function insert(Request $req){

	/*	$req->validate([
			'username'=>'bail|required|min:5|unique:users',
			'email'=>'required',
			'password'=>'required'
		]);
		/*$validation = $this->validate($req, [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		])->validate();*/

		//$validation->validate();

/*		$validation = Validator::make($req->all(), [
			'username'=>'bail|required|min:5|unique:users',
			'password'=>'required',
			'name'=>'required',
			'cgpa'=>'required'
		]);

		if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();

			return redirect()->route('home.add')
							->with('errors', $validation->errors())
							->withInput();		
		}*/

		$user 			= new User;
		$user->username = $req->username;
		$user->email 	= $req->uname;
		$user->password 	= $req->password;
		$user->type 	=  'manager';


		if($user->save()){
			return redirect()->route('home.index');
		}else{
			return redirect()->route('login.index');
		}

		
	}
    public function verify(Request $req){
    	
 /*       $req->uname 
        $req->password*/

        //$data = User::all();

/*        $user = User::where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();*/

        $user = DB::table('users')
                    ->where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();

    	if($user != null){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('home.index');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		//return view('login.index');
            return redirect('/login');
    	}
    }
}
