<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Sale extends Model
{
    //
    use SoftDeletes;
	protected $table = 'sales';
	protected $primaryKey = 'id';

}
