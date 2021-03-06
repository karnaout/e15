<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    public static function find($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }

    public function cards()
    {
        return $this->belongsToMany('App\Models\Card')->withTimestamps();
    }
}
