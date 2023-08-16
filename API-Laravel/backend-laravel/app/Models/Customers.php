<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phoneNumber1', 'phoneNumber2', 'email', 'password', 'DOB', 'website', 'address'];

}