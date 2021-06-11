<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    public $timestamps = false;

    protected $appends = ['value','value_ar','value_en'];

    public function getValueAttribute()
    {
        if($this->attributes['key'] != "content"
//            && $this->attributes['key'] != "seo"
        ){
            //return $this->attributes['value'];
            $locale = app()->getLocale();
            return json_decode($this->attributes['value'],true);
        }
        //return ;
        return $this->attributes['value'];

    }
    public function getValueArAttribute()
    {
        if($this->attributes['key'] != "content"
//            && $this->attributes['key'] != "seo"
        ){
            $locale = "ar";
            return json_decode($this->attributes['value'],true)["$locale"];
        }
        //return ;
        return $this->attributes['value'];
    }
    public function getValueEnAttribute()
    {
        if($this->attributes['key'] != "content"
//            && $this->attributes['key'] != "seo"
        ){
            $locale = "en";
            return json_decode($this->attributes['value'],true)["$locale"];
        }
        //return ;
        return $this->attributes['value'];
    }
}
