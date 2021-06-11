<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
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
}
