<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AccountType;
use App\Account;
use App\User;



class AccountsController extends Controller
{
    public function allAccounts()
    {
    	$accounts = Account::get();

    	return view('admin.accounts.all', compact('accounts'));
    }

    public function userAccounts(User $user)
    {
    	$user_accounts = Account::where('user_id', $user->id)->get();

    	return view('admin.accounts.user', compact('user','user_accounts'));
    }

    public function addAccount(User $user)
    {
    	$account_types = AccountType::get();

    	return view('admin.accounts.add-new-account', compact('user','account_types'));
    }

    public function addAccountType()
    {
 		$account_types = AccountType::get();

    	return view('admin.accounts.types.add', compact('account_types'));
    }

    public function postNewAccount(Request $request, User $user)
    {
			
    	$this->validate(request(), [
            'account_type_id' => 'required',
            'initial_account_balance' => 'required',
        ]);
        
        Account::insert([
            'account_type_id' => $request->account_type_id,
            'user_id' => $user->id,
            'initial_account_balance' => $request->initial_account_balance,
            'account_number' => generateAccountNumber(16),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    	flash('New Account created successfully!')->success();

    	return back();
    }


    public function postAccountType(Request $request)
    {
    	$this->validate(request(), [
            'type_of_account' => 'required',
        ]);
        
        AccountType::insert([
            'type_of_account' => $request->type_of_account,
            'description' => $request->description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    	flash('Account Type added successfully!')->success();

    	return back();
    }

    public function editAccountType(AccountType $type)
    {

    	return view('admin.accounts.types.edit', compact('type'));
    }

    public function deleteAccountType(AccountType $type)
    {
    	AccountType::where('id', $type->id)->delete();

    	flash('Account Type was deleted!')->error();
  	
    	return back();
    }
}
