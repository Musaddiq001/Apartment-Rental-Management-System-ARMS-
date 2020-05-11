<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\login;
use Validator;
use App\User;


class LoginController extends Controller
{
    
    public function index(Request $req){
    	return view('login.index');
    }

    public function verify(Request $req){
    	
 /*       $req->uname 
        $req->password*/

        //$data = User::all();

/*        $user = User::where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();*/

        $user = DB::table('admininfo')
                    ->where('username', $req->uname)
                    ->where('password', $req->password)
                    ->first();
		
			if($user != null){
            if($req->usertype=='Admin'){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('admin.index');
            }
            else
            {
                $req->session()->put('uname', $req->uname);
    		return redirect()->route('manager.managerindex');
            
            }
    	}
		else{
            $req->session()->flash('msg', 'invalid username/password');
    		//return view('login.index');
            return redirect('/login'); 
    	}
    }
	public function passrecover(Request $req){
    	return view('login.passrecover');
    }
    public function passrecovered(Request $request){

    $validation = Validator::make($request->all(), [
        'username'=>'required|exists:admininfo',
        'phone'=>'required|size:11|exists:admininfo',
        'password'=>'required',
        'cpassword'=>'same:password'
    ]);
    if($validation->fails()){
        return back()
                ->with('errors', $validation->errors())
                ->withInput();
        return redirect()->route('login.passrecover')
                        ->with('errors', $validation->errors())
                        ->withInput();		
    }
    DB::table('admininfo')
    ->where('username', $request->username)
    ->update(array('password'=> $request->password));
    $request->session()->flash('username', $request->username);
                $request->session()->flash('msg', 'password recoverd successfully!Enter new password and log in to the system');
                return redirect()->route('login.index'); 
    }
}
