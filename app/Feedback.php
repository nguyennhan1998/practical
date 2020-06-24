<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    public $fillable = [
        "name",
        "email",
        "phone",
        "feedback",
    ];
}
