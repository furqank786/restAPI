<?php

namespace App;
use User;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title','isDone'];

    public function user(){

        return $this->belongsTo('App\User');

    }

}
