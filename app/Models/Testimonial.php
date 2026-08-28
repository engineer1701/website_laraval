<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\HasPublicImage;

class Testimonial extends Model
{
    use HasFactory, HasPublicImage;

    protected $fillable = ['name', 'company', 'logo', 'quote'];
}
