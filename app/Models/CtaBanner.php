<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtaBanner extends Model
{
    use HasFactory;
    protected $fillable = ['text', 'link', 'image_path'];
}