<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
