<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = ['customerId', 'payCheck', 'status', 'type', 'dueDate', 'renewal', 'bankName', 'accountNumber', 'checkNumber'];

}