<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'branches';
    public $timestamps = true;
    protected $guarded = [];

    public function currencyName(){
    	return $this->hasOne('App\Models\Currency', 'id', 'currency_id');
    }
    public function countryName(){
    	return $this->hasOne('App\Models\Country', 'country_id', 'country_id');
    }
    public function stateName(){
    	return $this->hasOne('App\Models\StateList', 'state_id', 'state_id');
    }
    public function cityName(){
    	return $this->hasOne('App\Models\CityList', 'city_id', 'city_id');
    }

}
