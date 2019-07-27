<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;

class UsersController extends Controller
{
	use RegistersUsers;

    public function allUsers()
    {
    	$users = User::get();

    	return view('admin.users.all', compact('users'));
    }

    public function addUser()
    {

    	return view('admin.users.adduser');
    }

    public function addNewUser(Request $request)
    {
    	$this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',   
        ]);
        
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    	flash('User added successfully!')->success();

    	return redirect()->route('all-users');
    }

    public function deleteUser(User $user)
    {
    	User::where('id', $user->id)->delete();

    	flash('User was deleted!')->error();
  	
    	return back();
    }
}
