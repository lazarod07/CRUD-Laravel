<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'value',
        'number',
        'category_id',
    ];

    public function category(){

        return $this->belongsTo('App\Models\Category');

    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public function getValue(){
        return $this->value;
    }

    public function setCategory_id($category_id){
        $this->category_id = $category_id;
    }

    public function getCategory_id(){
        return $this->category_id;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function getNumber(){
        return $this->number;
    }
    
}
