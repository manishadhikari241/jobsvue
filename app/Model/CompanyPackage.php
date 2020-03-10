<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyPackage extends Model
{
protected $primaryKey='packages_id';

protected $fillable=['package_name','price','duration','features','status'];
}
