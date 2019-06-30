<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Book extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['name', 'description', 'year', 'author_id', 'genre_id'];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('images')->registerMediaConversions(function (Media $media) {
            $this->addMediaConversion('thumb')->fit(Manipulations::FIT_CROP, 150, 150);
        });
    }


    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
