<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginUser;
use App\Http\Requests\RegisterUser;
use App\User;
use App\Menu;
use App\Carrito;
use App\Pedido;
use Auth;

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

    public function signin(LoginUser $request){
    	
    	$validator = Validator::make(
    		$request->all(),
    	 	$request->rules(),
    	  	$request->messages()
    	 );

    	if($validator->valid())
    	{
	    	if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
	    	{
				return  redirect()->route('list');
	    	}
    	}
    }

    public function signup(RegisterUser $request){
    	$validator = Validator::make(
    		$request->all(),
    	 	$request->rules(),
    	  	$request->messages()
    	 );

    	if($validator->valid())
    	{
    		$user = new User();
    		$user->nombres = $request->nombres_register;
    		$user->apellidos = $request->apellidos_register;
    		$user->email = $request->email_register;
    		$user->password = bcrypt($request->password_register);
    		$user->remember_token = str_random(100);
    		$user->save();

    		return redirect("social")->with("message","usuario registrado ya puede iniciar sesión");
    	}

    }

    public function logout()
    {
        Auth::logout();

		return  redirect()->route('login');

    }

	public function list_last(){
		#$menu = Menu::all()->paginate(8);
		$menu = Menu::get();
    	return view('list_last', compact('menu'));
	}

	public function search($search){
		$menu = Menu::where("menu_nombre", 'like','%'.$search.'%')->get();
    	return view('search', compact('menu'));
	}

	public function menu($menu_id){
        $menu = Menu::where("menu_id",$menu_id)->first();
    	return view('menu',compact('menu'));
	}

	public function carrito(){
		$carrito = Carrito::where("user_id",Auth::id())->with('menu')->get();
		#dd($carrito);
    	return view('carrito', compact('carrito'));
	}
	public function add_cart(Request $request){
    	if($request->isMethod('post'))
    	{
    		$carrito = new Carrito();
    		$carrito->user_id = Auth::id();
    		$carrito->menu_id = $request->menu_id;
    		$carrito->cantidad = $request->cantidad;
    		$carrito->precio_total = $request->cantidad * $request->precio_t;
    		$carrito->save();
    	}
	}

    public function pedir(Request $request){
        
        $pedido = new Pedido();
        $pedido->user_id = Auth::id();
        $pedido->monto_total = $request->total;
        $pedido->status = 0;
        $pedido->save();

        return  redirect()->route('carrito')->with("messages","Su pedido ha sido solicitado y sera procesado de inmediato, se le envio un correo con los detales");

    }

	public function admin_login(){

	}

	public function admin(){
    	return view('admin');
	}


}