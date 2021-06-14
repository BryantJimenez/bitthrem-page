<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['email', 'address', 'phone', 'facebook', 'youtube', 'instagram', 'comunity_facebook', 'comunity_whatsapp'];
}
