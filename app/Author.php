<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'surname'];

    public function fullName()
    {
        return $this->surname . ' ' . $this->name;
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
