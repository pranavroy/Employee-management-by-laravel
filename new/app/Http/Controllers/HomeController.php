<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use DB;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$student = Students::all();
        return view('home', ['students' => $student]);
    }
	public function delete($id)
	{
		Students::where('id',$id)->delete();
		$students=Students::all();
		return view('home', ['students' => $students]);
	}
	public function add()
	{
		return view('add');
	}
	public function insert(Request $req)
	{
		$name=$req->input('Name');
		$class=$req->input('Email');
		$branch=$req->input('Salary');
		$data=array("Name"=>$name,"Email"=>$class,"Salary"=>$branch);
		DB::table('students')->insert($data);
		$student = Students::all();
		return view('home',['students' => $student]);
	}
}
