<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorymeta extends Model
{

    protected $appends = ['content','content_ar','content_en','slug','slug_ar','slug_en'];

    public function getContentAttribute()
    {
        return $this->attributes['content'];
//        if(isset($this->attributes['type']) &&
//            $this->attributes['type'] == "excerpt"){
//            $locale = app()->getLocale();
//            return json_decode($this->attributes['content'],true)[$locale];
//        }
//        return $this->attributes['content'];
    }
    public function getContentArAttribute()
    {
        $locale = "ar";
        return json_decode($this->attributes['content'],true)["$locale"];
    }
    public function getContentEnAttribute()
    {
        $locale = "en";
        return json_decode($this->attributes['content'],true)["$locale"];
    }
}
