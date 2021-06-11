<?php

namespace App;

use Composer\Config;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $appends=['name','name_ar','name_en','description','description_ar','description_en'];

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
    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return json_decode($this->attributes['description'],true)["$locale"];
    }
    public function getDescriptionArAttribute()
    {
        $locale = "ar";
        return json_decode($this->attributes['description'],true)["$locale"];
    }
    public function getDescriptionEnAttribute()
    {
        $locale = "en";
        return json_decode($this->attributes['description'],true)["$locale"];
    }

    public function users()
    {
    	return $this->hasMany('App\Subscriber');
    }

    public function active_users()
    {
    	return $this->hasMany('App\Models\Userplan')->where('status',1);
    }

}
