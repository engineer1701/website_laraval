<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $appKey = env('APP_KEY');
        if (empty($appKey)) {
            $appKey = 'base64:' . base64_encode(random_bytes(32));
            putenv("APP_KEY={$appKey}");
            $_ENV['APP_KEY'] = $appKey;
            $_SERVER['APP_KEY'] = $appKey;
            config(['app.key' => $appKey]);

            $envPath = base_path('.env');
            if (file_exists($envPath) && is_writable($envPath)) {
                $contents = file_get_contents($envPath);
                if (preg_match('/^APP_KEY=.*/m', $contents)) {
                    $contents = preg_replace('/^APP_KEY=.*/m', "APP_KEY={$appKey}", $contents);
                } else {
                    $contents .= PHP_EOL . "APP_KEY={$appKey}" . PHP_EOL;
                }
                file_put_contents($envPath, $contents);
            }
        }

        // Ensure SQLite database file exists when using sqlite connection in containers
        if (config('database.default') === 'sqlite') {
            $database = env('DB_DATABASE', database_path('database.sqlite'));

            // If the configured path is relative, convert to absolute path using base_path
            if (!str_starts_with($database, '/') && !preg_match('/^[A-Za-z]:\\\\/', $database)) {
                $database = base_path($database);
            }

            $dir = dirname($database);
            if (!is_dir($dir)) {
                @mkdir($dir, 0755, true);
            }

            if (!file_exists($database)) {
                try {
                    @touch($database);
                    @chmod($database, 0666);
                } catch (\Throwable $e) {
                    Log::warning('Could not create sqlite database file', ['path' => $database, 'error' => $e->getMessage()]);
                }
            }
        }
    }
}
