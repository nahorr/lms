<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Account;
use App\AccountType;

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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',   
        ]);
        
        User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
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

    public function editUser(User $user)
    {
        $accounts = Account::where('user_id', $user->id)->get();
        
    	return view('admin.users.edituser', compact('user', 'accounts'));
    }

    public function postEditUser(Request $request, User $user)
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',   
        ]);

        $edit_user = User::where('id', $user->id)->first();

        $edit_user->first_name = $request->first_name;
        $edit_user->last_name = $request->last_name;
        $edit_user->dob = $request->dob;
        $edit_user->phone = $request->phone;
        $edit_user->country = $request->country;
        $edit_user->address = $request->address;
        $edit_user->city = $request->city;
        $edit_user->state = $request->state;

        $edit_user->save();
    
        flash('User information updated successfully!')->success();

        return redirect()->route('all-users');
    }

    public function deleteUser(User $user)
    {
    	User::where('id', $user->id)->delete();

    	flash('User was deleted!')->error();
  	
    	return back();
    }

    public function userdetail(User $user)
    {
        $accounts = Account::where('user_id', $user->id)->get();

        return view('admin.users.userdetail', compact('user', 'accounts'));
    }
}
