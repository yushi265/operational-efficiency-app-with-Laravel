<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['contract_type', 'amount', 'due_date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}


/**
 * contract_typeについて
 * 02  普通預金
 * 03  定期預金
 * 04  融資
 */
