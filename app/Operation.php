<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['nr_account', 'your_account', 'receiver_name', 'receiver_lastName', 'payer_id', 'amount', 'status'];
}
