<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "information";
    public $fillable = [
        "name",
        "email",
        "phone",
        "feedback",
    ];
}
