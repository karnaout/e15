<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public static function find($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }

    public function decks()
    {
        return $this->belongsToMany('App\Models\Deck')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category')->withTimestamps();
    }
}
