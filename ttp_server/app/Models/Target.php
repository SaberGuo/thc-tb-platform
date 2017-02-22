<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Target extends Base
{
    //
    use SoftDeletes;
    protected $table = 'target';
    protected $fillable = ['name', 'info'];

}
