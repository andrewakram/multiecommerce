<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userplan extends Model
{
    use HasFactory;

//    protected $appends=['name','name_ar','name_en'];
//
//    public function getNameAttribute()
//    {
//        $locale = app()->getLocale();
//        return json_decode($this->plan_info()->first()->name,true)["$locale"];
//    }
//    public function getNameArAttribute()
//    {
//        $locale = "ar";
//        return json_decode($this->plan_info()->first()->name,true)["$locale"];
//    }
//    public function getNameEnAttribute()
//    {
//        $locale = "en";
//        return json_decode($this->plan_info()->first()->name,true)["$locale"];
//    }

    public function plan_info()
    {
        return $this->belongsTo('App\Plan','plan_id','id');
    }

    public function payment_method()
    {
        return $this->belongsTo('App\Trasection','trasection_id')->with('method');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function user_with_domain()
    {
       return $this->belongsTo('App\Models\User','user_id','id')->with('user_domain');
    }

    public function latestorder(){
        return $this->hasMany('App\Userplan')->where('will_expired',date('Y-m-d'))->where('status',1);
    }
}
