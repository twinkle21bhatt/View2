<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationApp extends Model
{
    use HasFactory;
    protected $fillable = ['id','name', 'age', 'contact_no', 'address', 'country'];
}
