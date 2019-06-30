<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {

        return $this->belongsTo(Genre::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(Genre::class, 'parent_id');
    }
}
