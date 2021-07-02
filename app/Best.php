<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Best extends Model
{
	use HasSlug;

    protected $fillable = ['name', 'lastname', 'slug', 'photo', 'email', 'phone', 'url', 'state', 'country_id'];

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed  $value
     * @param  string|null  $field
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field, $value)->firstOrFail();
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom(['name', 'lastname'])->saveSlugsTo('slug')->slugsShouldBeNoLongerThan(191);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
