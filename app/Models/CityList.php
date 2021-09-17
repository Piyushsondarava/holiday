<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityList extends Model
{
    use HasFactory;
    protected $table = 'city_list';
    public $timestamps = false;
    protected $guarded = [];
}
