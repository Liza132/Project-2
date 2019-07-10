<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'email', 'book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
