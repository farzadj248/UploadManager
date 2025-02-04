<?php

namespace App\Traits;

use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;

trait MediaFileEffect
{
    use InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(8);
    }

    public function addMediaFile($file, $collection = 'images')
    {
        return $this->addMedia($file)->toMediaCollection($collection);
    }

    public function getThumbnailUrl($collection = 'images')
    {
        return $this->getFirstMediaUrl($collection, 'thumb');
    }
}
