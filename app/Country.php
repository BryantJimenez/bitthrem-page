<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
	use SoftDeletes;
	
	protected $table = 'countries';
    public $timestamps = false;

    protected $fillable = ['iso', 'name', 'nicename', 'iso3', 'numcode', 'phonecode'];

    public function bests() {
        return $this->hasMany(Best::class);
    }
}
