<?php namespace App;
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 23/11/15
 * Time: 22:28
 */

use Illuminate\Database\Eloquent\Model;

class Andreism extends Model {

    public static $rules = [];

    protected $fillable = ['story', 'name', 'image'];

    protected $hidden = ['approved', 'created_at', 'updated_at'];
}
