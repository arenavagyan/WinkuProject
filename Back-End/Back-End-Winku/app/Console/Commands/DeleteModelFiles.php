<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DeleteModelFiles extends Command
{
    protected $signature = 'delete:model {name}';
    protected $description = 'Delete all files associated with a given model';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $modelName = $this->argument('name');
        $modelPath = app_path("Models/{$modelName}.php");

        if (!File::exists($modelPath)) {
            $this->error("Model {$modelName} does not exist!");
            return;
        }

        // Convert CamelCase to snake_case
        $modelNameSnake = Str::snake(Str::pluralStudly($modelName));

        // Define paths
        $paths = [
            app_path("Models/{$modelName}.php"),
            database_path("migrations/*create_{$modelNameSnake}_table.php"),
            database_path("factories/{$modelName}Factory.php"),
            database_path("seeders/{$modelName}Seeder.php"),
            app_path("Http/Controllers/{$modelName}Controller.php"),
            app_path("Policies/{$modelName}Policy.php"),
        ];

        foreach ($paths as $path) {
            foreach (glob($path) as $file) {
                if (File::exists($file)) {
                    File::delete($file);
                    $this->info("Deleted: {$file}");
                }
            }
        }

        $this->info("All associated files for model {$modelName} have been deleted.");
    }
}
