<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termoption extends Model
{
    use HasFactory;

    public $timestamps = false;

//    public $appends =['name'];
    public function getNameAttribute()
    {
//        if ($this->attributes['type'] == 1) {
            $locale = app()->getLocale();
            return json_decode($this->attributes['name'], true)[$locale];
//        }
//        return $this->attributes['name'];
    }

    public function categories()
    {
        return $this->hasMany(Termoption::class, 'p_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Termoption::class, 'id', 'p_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Termoption::class, 'p_id', 'id')->with('categories');
    }
}
