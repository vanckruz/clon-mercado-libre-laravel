<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterUser extends Request{
	protected $redirect = "social";

	public function rules(){
		return [
			"nombres_register"   => "required|min:2|max:70",
			"apellidos_register" => "required|min:2|max:70",
			"email_register"     => "required|email|min:11|max:70",
			"password_register"  => "required|min:5|max:20",
		];
	}

	public function messages(){
		return [
			"nombres_register.required" => "Ingresa tus nombres",
			"nombres_register.min" => "minimo de 2 caracteres en el campo nombres",
			"nombres_register.max" => "maximo de 70 caracteres en el campo nombres",
			"apellidos_register.required" => "Ingresa tus apellidos",
			"apellidos_register.min" => "minimo de 11 caracteres en el campo nombres",
			"apellidos_register.max" => "maximo de 70 caracteres en el campo apellidos",
			"email_register.required" => "Ingrese tu email",
			"email_register.email" => "Ingrese un email valido",
			"email_register.min" => "minimo de 11 caracteres en el campo nombres",
			"email_register.max" => "maximo de 70 caracteres en el campo apellidos",
			"email_register.unique" => "El email ya esta registrado",
			"password_register.required" => "Ingresa un password",
			"password_register.min" => "minimo de 5 caracteres en el campo password",
			"password_register.max" => "maximo de 20 caracteres en el campo password",
		];
	}

	public function response(array $errors){
		return redirect($this->redirect)
		->withErrors($errors,'register')
		->withInput();
	}

	public function authorize(){
		return true;
	}

}
