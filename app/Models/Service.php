<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasPublicImage;

class Service extends Model
{
    use HasFactory, HasPublicImage;

    protected $fillable = ['title', 'description', 'icon'];
}
