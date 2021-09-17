<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCity extends Model
{
    use HasFactory;
    protected $table = 'api_city';
    public $timestamps = false;
    protected $guarded = [];
}