<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\manager;
use App\customer;
use App\houseProvider;
use App\houseinfo;
use App\Http\Requests\adminRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class adminController extends Controller
{

	public function index(Request $req){

		if($req->session()->has('uname')){
			return view('admin.index');
		}else{
			return redirect('/login');
		}
	}   

	public function show($id){

		$user = User::find($id);
		return view('admin.details', $user);
	}
	
	public function add(){

		return view('admin.add');
	}

	public function insert(Request $req){
		
		$req->validate([
			'fname'=>'bail|required|min:5|unique:managers',
			'lname'=>'required',
			'uname'=>'required',
			'password'=>'required',
			'email'=>'required',
			'phone'=>'required',
			'type'=>'required',
			'address'=>'required',
			'nid'=>'required',
			'division'=>'required',
     		'area'=>'required'
		]);

		$user 			= new manager;
		$user->fname = $req->fname;
		$user->lname 	= $req->lname;
		$user->username 	= $req->uname;
		$user->password 	= $req->password ;
        $user->email 	= $req->email;
		$user->phone 	= $req->phone;
		$user->type 	= $req->type;
		$user->address 	= $req->address;
		$user->nid 	= $req->nid ;
        $user->division 	= $req->division;
		$user->area 	= $req->area;

		if($user->save()){
			return redirect()->route('admin.index');
		}else{
			return redirect()->route('add.index');
		}

		
	}

	public function edit($id){
	
		$user = User::find($id);
		return view('admin.edit', $user);
	}
	public function edit1($id){

		$user = Buscounters::find($id);
		return view('admin.edit1', $user);
	}
	
/*	public function edit2($id){

		$user = Buscounters::find($id);
		return view('admin.edit2', $user);
	}*/

	public function update($id, Request $req){
		
		$validation = $this->validate($req, [
			'username'=>'bail|required|unique:users',
			'email'=>'required|min:5',
		])->validate();

		$validation->validate();
		
		$user = User::find($id);
		$user->username = $req->username;
		$user->email = $req->uname;
		$user->password = $req->password;
		$user->type 	= $req->type;

		if($user->save()){
			return redirect()->route('admin.list1');
		}else{
			return redirect()->route('admin.edit', $id);
		}
	}
	public function update1($id, Request $req){
		
		$user = Buscounters::find($id);
		$user->operator = $req->operator;
		$user->manager = $req->manager;
		$user->name = $req->name;
		$user->location 	= $req->location;

		if($user->save()){
			return redirect()->route('admin.list2');
		}else{
			return redirect()->route('admin.edit1', $id);
		}
	}

	public function delete($id){
		$user = User::find($id);
		return view('admin.delete', $user);
	}

    public function delete1($id){
		$user = Buscounters::find($id);
		return view('admin.delete1', $user);
	}	
	

	public function destroy($id, Request $req){
		if(User::destroy($req->userId)){
			return redirect()->route('admin.list');
		}else{
			return redirect()->route('admin.delete', $id);
		}
	}
	
	public function destroy1($id, Request $req){
		if(Buscounters::destroy($req->userId)){
			return redirect()->route('admin.list2');
		}else{
			return redirect()->route('admin.delete1', $id);
		}
	}

	public function list(){

		$users = manager::all();
		return view('admin.view_managers', ['managers'=>$users]);
	}
	
	public function list1(){	
		$users = customer::all();	
	
		return view('admin.view_customers', ['customers'=>$users]);
	}
	
	public function list2(){
		
		$users = houseProvider::all();
							
		return view('admin.view_houseowners', ['houseowners'=>$users]);
	}
	public function list3(){
		$users = houseinfo::all();
		return view('admin.view_houses', ['houseinfos'=>$users]);
	}
	public function searchBus(Request $request)
	{
		
		
        $buses = DB::table('buses');
        if( $request->input('search')){
            $buses = $buses->where('name', 'LIKE',  $request->search . "%");
        }
        $buses = $buses->paginate(10);
        
    	return view('admin.view_buses', compact('buses'));
    }

	public function searchCounter(Request $request)
	{
        $buscounters = DB::table('buscounters');
        if( $request->input('search')){
            $buscounters = $buscounters->where('name', 'LIKE',  $request->search . "%");
        }
    	return view('admin.view_buscounters', compact('buscounters'));
    }
}
