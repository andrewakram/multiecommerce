<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Attribute;
use function PHPUnit\Framework\isJson;

class Category extends Model
{

    protected $appends = ['name', 'name_ar', 'name_en',
        'slug',
//'slug_ar','slug_en'
    ];

    public function getNameAttribute()
    {

        $locale = app()->getLocale();
        if (isset($this->attributes['type']) &&
            $this->attributes['type'] == "banner_ads" &&
            $this->attributes['type'] == "offer_ads" &&
            $this->attributes['type'] == "coupon"
//            &&$this->attributes['type'] == "method"
        ) {
            return $this->attributes['name'];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "category") {
            return json_decode($this->attributes['name'], true)[$locale];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "payment_getway") {
            return json_decode($this->attributes['name'], true)[$locale];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "city") {
            return json_decode($this->attributes['name'], true)[$locale];
        }
        elseif (isset($this->attributes['type']) && $this->attributes['type'] == "method") {
            return json_decode($this->attributes['name'], true)[$locale];
        }
        elseif (isset($this->attributes['type']) &&
            ($this->attributes['type'] == "features" ||
                $this->attributes['type'] == "gallery" ||
                $this->attributes['type'] == "testimonial" ||
                $this->attributes['type'] == "parent_attribute" ||
                $this->attributes['type'] == "child_attribute"
            )) {
            return json_decode($this->attributes['name'], true)[$locale];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "brand") {
            return json_decode($this->attributes['name'], true)[$locale];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "Uncategorizied") {
            return $this->attributes['name'];
        } elseif (isset($this->attributes['type']) && $this->attributes['type'] == "slider") {
            return asset($this->attributes['name']);
        }
        return json_decode($this->attributes['name'], true);


//        if(isset($this->attributes['type']) &&
//            $this->attributes['type'] != "banner_ads" &&
//            $this->attributes['type'] != "offer_ads" &&
//            $this->attributes['type'] != "coupon" &&
//            $this->attributes['type'] != "method" &&
//            $this->attributes['type'] != "slider"){
//            $locale = app()->getLocale();
//            return json_decode($this->attributes['name'],true)["$locale"];
//        }
//        return $this->attributes['name'];
    }

    public function getNameArAttribute()
    {
        $locale = "ar";
        return json_decode($this->attributes['name'], true)["$locale"];
    }

    public function getNameEnAttribute()
    {
        $locale = "en";
        return json_decode($this->attributes['name'], true)["$locale"];
    }

    public function getSlugAttribute()
    {
        $locale = app()->getLocale();
        if (isset($this->attributes['type']) &&
            ($this->attributes['type'] == "testimonial" || $this->attributes['type'] == 'payment_getway')
//            &&
//            $this->attributes['type'] != "offer_ads" &&
//            $this->attributes['type'] != "coupon" &&
//            $this->attributes['type'] != "method" &&
//            $this->attributes['type'] != "slider"
        ) {

            return json_decode($this->attributes['slug'], true)["$locale"];
        }
        return $this->attributes['slug'];
    }
//    public function getSlugArAttribute()
//    {
//        $locale = "ar";
//        return json_decode($this->attributes['slug'],true)["$locale"];
//    }
//    public function getSlugEnAttribute()
//    {
//        $locale = "en";
//        return json_decode($this->attributes['slug'],true)["$locale"];
//    }

    public function posts()
    {
        return $this->hasMany('App\Postcategory');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'p_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'p_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'p_id', 'id')->with('categories');
    }

    public function featured_child_attribute()
    {
        return $this->hasOne(Category::class, 'p_id', 'id')->where('featured', 1);
    }

    public function featured_child_with_post_count_attribute()
    {
        return $this->hasMany(Category::class, 'p_id', 'id')->where('featured', 1)->withCount('variations');
    }

    public function variations()
    {
        return $this->hasMany('App\Attribute', 'variation_id', 'id');
    }

    public function parent_variation()
    {
        return $this->hasMany('App\Attribute', 'category_id', 'id');
    }


    public function parent_relation()
    {
        return $this->hasMany(Categoryrelation::class, 'category_id', 'id');
    }

    public function child_relation()
    {
        return $this->belongsToMany(Category::class, Categoryrelation::class, 'relation_id');

    }

    public function gateway_users()
    {
        return $this->hasMany('App\Getway');
    }

    public function preview()
    {
        return $this->hasOne('App\Categorymeta')->where('type', 'preview')->select('category_id', 'type', 'content');
    }

    public function description()
    {
        return $this->hasOne('App\Categorymeta')->where('type', 'description')->select('category_id', 'type', 'content');
    }

    public function credentials()
    {
        return $this->hasOne('App\Categorymeta')->where('type', 'credentials')->select('category_id', 'type', 'content');
    }

    public function excerpt()
    {
        return $this->hasOne('App\Categorymeta')->where('type', 'excerpt')->select('category_id', 'type', 'content');
    }


    public function active_getway()
    {
        return $this->hasOne('App\Getway')->where('user_id', Auth::id());
    }

    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }

    public function take_20_product()
    {
        return $this->belongsToMany('App\Term', 'postcategories')->with('preview', 'attributes')->take(15);
    }


}
