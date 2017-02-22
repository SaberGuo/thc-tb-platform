<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investigation extends Base
{
    //
    use SoftDeletes;

    protected $table = 'investigation';
    protected $fillable = ['user_id', 'target_id','name'];
    public function samples() {
        return $this->hasMany('App\Models\Sample');
    }

    public function User(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function target(){
        return $this->hasOne('App\Models\Target');
    }

}
