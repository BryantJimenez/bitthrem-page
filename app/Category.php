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

    protected $fillable = ['name', 'slug', 'state'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug')->slugsShouldBeNoLongerThan(191);
    }

    public $translatable = ['name'];

    public function questions() {
        return $this->hasMany(Question::class);
    }
}
