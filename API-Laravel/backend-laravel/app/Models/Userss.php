<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    use HasFactory;

    protected $fillable = ['customerName', 'phoneNumber1', 'phoneNumber2', 'address', 'userId'];

}