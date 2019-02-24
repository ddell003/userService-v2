<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/24/19
 * Time: 3:32 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    use SoftDeletes;

    public function users()
    {
        return $this->hasMany(User::class, 'type_id');
    }
}