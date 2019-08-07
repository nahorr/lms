<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AccountType;
use App\Account;


class AccountsController extends Controller
{
    public function allAccounts()
    {
    	$accounts = Account::get();

    	return view('admin.accounts.all', compact('accounts'));
    }

    public function addAccountType()
    {
 		$account_types = AccountType::get();

    	return view('admin.accounts.types.add', compact('account_types'));
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
