<?php
/**
 * Created by PhpStorm.
 * User: saber
 * Date: 2017/2/21
 * Time: 16:14
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Model
{
    use SoftDeletes;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->hidden[] = 'deleted_at';
    }
}