<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiple_images extends Model
{
    use HasFactory;
    protected $table = 'multiple_images'; // Ensure the table name is correct
    protected $fillable = ['user_name', 'user_email', 'multiple_images']; // Ensure the fields are correctly filled
}
