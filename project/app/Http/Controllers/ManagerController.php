<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Buscounters;
use App\Buses;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class ManagerController extends Controller
{

	public function index(Request $req){
		
		if($req->session()->has('uname')){
			return view('manager.managerindex');
		}else{
			return redirect('/login');
		}
	}
	public function list4(){
		$users = Buses::all();
		return view('manager.view_buses', ['buses'=>$users]);
		
	}
}
