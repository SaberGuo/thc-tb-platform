<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sample extends Base
{
    //
    use SoftDeletes;
    protected $table = 'sample';
    protected $fillable = ['invest_id', 'value','tags'];
    public function investigation() {
        return $this->belongsTo('App\Models\Investigation', 'invest_id');
    }

    public function setTagsAttribute($v) {
        $this->attributes['tags'] = json_encode($v);
    }
}
