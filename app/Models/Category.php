<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];

    public function products(){

        return $this->hasMany('App\Models\Product');

    }

    public function setName($name){

        $this->name = $name;

    }

    public function getName(){

        return $this->name;
        
    }

    public function setDescription($description){

        $this->description = $description;

    }

    public function getDescription(){

        return $this->description;
        
    }
}
