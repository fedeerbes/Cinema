<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

	public function index()
	{
		$users = User::All();
		return view('usuario.index',compact('users'));
	}

	public function create()
	{
		return view('usuario.create');
	}

	public function store(Request	$request)
	{
		User::create([
			'name' => $request['name'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
		]);

		return redirect('/usuario')->with('message','store');
	}

	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		$user = User::find($id);
		return view('usuario.edit', ['user'=>$user]);
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
