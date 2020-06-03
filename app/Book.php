<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = [
        "author_id",
        "title",
        "ISBN",
        "pub_year",
        "available",
    ];
    public function Author(){
        return $this->belongsTo("\App\Author","author_id");// tra ve 1 object
    }

}
