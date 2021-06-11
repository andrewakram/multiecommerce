<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $appends=['name','name_ar','name_en'];

    public function getNameAttribute()
    {
        $locale = app()->getLocale();
        return json_decode($this->attributes['name'],true)["$locale"];
    }
    public function getNameArAttribute()
    {
        $locale = "ar";
        return json_decode($this->attributes['name'],true)["$locale"];
    }
    public function getNameEnAttribute()
    {
        $locale = "en";
        return json_decode($this->attributes['name'],true)["$locale"];
    }

    public function installed()
    {
    	return $this->hasMany('App\Domain');
    }
}
