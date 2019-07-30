<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user()
    {
        return $this->belongs('App\User');
    }

    public function account_type()
    {
        return $this->belongs('App\AccountType');
    }
}
