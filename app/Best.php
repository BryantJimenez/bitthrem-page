<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Best extends Model
{
	use HasSlug;

    protected $fillable = ['name', 'lastname', 'slug', 'photo', 'state', 'country_id'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom(['name', 'lastname'])->saveSlugsTo('slug')->slugsShouldBeNoLongerThan(191);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
