<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginUser extends Request{
	protected $redirect = "social";

	public function rules(){
		return [
			"email" => "required|email|min:11|max:70",
			"password" => "required|min:5|max:20"
		];
	}

	public function messages(){
		return [
			"email.required" => "Ingrese un valor en el campo email",
			"email.email" => "Ingrese un formato correcto en el campo email",
			"email.min" => "Ingrese un minimo de 11 caracteres en el campo email",
			"email.max" => "Ingrese un maximo de 70 caracteres en el campo email",
			"password.required" => "Ingrese un valor en el campo password",
			"password.min" => "Ingrese un minimo de 5 caracteres en el campo password",
			"password.max" => "Ingrese un maximo de 20 caracteres en el campo password"
		];
	}

	public function response(array $errors){
		return redirect($this->redirect)
		->withErrors($errors,'login')
		->withInput();
	}

	public function authorize(){
		return true;
	}

}
