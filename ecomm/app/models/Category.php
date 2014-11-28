<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 26/11/2014
 * Time: 12:11
 */

class Category  extends Eloquent{

    protected $fillable = array('name');
    public  static $rules = array('name' => 'required|min:3');

    public function products(){
        return $thia->hasMany('Product');
    }

} 