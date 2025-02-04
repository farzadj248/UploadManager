<?php

namespace App\Models;

use App\Traits\MediaFileEffect;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model implements HasMedia
{
    use HasFactory,MediaFileEffect;

    protected $fillable = ['title','description'];
}
