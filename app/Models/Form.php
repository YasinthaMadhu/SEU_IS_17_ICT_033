<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'username',
        'Date of birth',
        'email',
        'phone',
        'NIC',
        'Gender',
        'Password',
        'Reenter password'
    ];

}
