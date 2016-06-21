<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function index(Request $request)
    {
    	return view("index");
    }

    public function login_register()
    {

    	return view('login');
    }

	public function list_last(){
    	return view('list_last');
	}

	public function search(){
    	return view('search');
	}

	public function menu(){
    	return view('menu');
	}

	public function carrito(){
    	return view('carrito');
	}

	public function admin(){
    	return view('admin');
	}


}