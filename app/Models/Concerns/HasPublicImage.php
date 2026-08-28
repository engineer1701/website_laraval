<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasPublicImage
{
    public function publicImageUrl(?string $path): ?string
    {
        if (!$path) {
            return null;
        }

        if (Str::startsWith($path, ['http://', 'https://'])) {
            return $path;
        }

        if (Str::startsWith($path, 'uploads/')) {
            return Storage::disk('public')->url($path);
        }

        return asset($path);
    }

    public function deletePublicImage(?string $path): void
    {
        if ($path && Str::startsWith($path, 'uploads/')) {
            Storage::disk('public')->delete($path);
        }
    }
}
