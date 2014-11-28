<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 27/11/2014
 * Time: 12:24
 */

class Product extends Eloquent {

     protected  $fillable  = array('category_id','title','description','price','availability','image');

    public static  $rules = array(
        'category_id' => 'required|integer',
        'title' => 'required|min:2',
        'description' => 'required|min:20',
        'price' => 'required|numeric',
        'availability' => 'integer',
        'image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif'
    );

    public function category(){

        return $this->belongsTo('Category');
    }

}