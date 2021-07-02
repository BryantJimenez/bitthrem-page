<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Question extends Model
{
	use HasSlug, HasTranslations;

    protected $fillable = ['question', 'slug', 'answer', 'category_id', 'state'];

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
        return SlugOptions::create()->generateSlugsFrom('question')->saveSlugsTo('slug')->slugsShouldBeNoLongerThan(191);
    }

    public $translatable = ['question', 'answer'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
