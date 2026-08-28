<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasPublicImage;

class CaseStudy extends Model
{
    use HasFactory, HasPublicImage;

    protected $fillable = ['title', 'slug', 'client', 'industry', 'result', 'summary', 'body', 'image'];
}
