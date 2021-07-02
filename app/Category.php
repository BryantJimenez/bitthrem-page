<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
	use SoftDeletes, HasSlug, HasTranslations;

    protected $fillable = ['name', 'slug', 'description', 'icon', 'type', 'state'];

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
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug')->slugsShouldBeNoLongerThan(191);
    }

    public $translatable = ['name', 'description'];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function helps() {
        return $this->hasMany(Help::class);
    }

    public function articles() {
        return $this->hasMany(Article::class);
    }
}
