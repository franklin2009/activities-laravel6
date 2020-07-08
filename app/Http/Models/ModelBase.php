<?php

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class ModelBase extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
	
}
