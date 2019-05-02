<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 5/1/19
 * Time: 6:10 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    protected $appends = ['count'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'caffeine',
        'servings'
    ];

    /**
     * Define the type column to every Item object instance
     *
     * @return string
     */
    public function getCountAttribute()
    {
        return 0;
    }
}