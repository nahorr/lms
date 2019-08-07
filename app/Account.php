<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function account_type()
    {
        return $this->belongsTo('App\AccountType');
    }
}
