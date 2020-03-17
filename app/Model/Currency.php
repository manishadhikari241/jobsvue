<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey='currency_id';

    protected $fillable=['currency_name','currency_symbol','status'];
}
