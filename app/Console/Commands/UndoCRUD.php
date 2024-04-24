<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UndoCRUD extends Command
{
    protected $signature = 'ball:undo {model : The name of the model}';

    protected $description = 'Undo CRUD for specified model';

    public function handle()
    {
        $modelName = $this->argument('model');
        $tableName = Str::plural(Str::snake($modelName));
        $modelFileName = app_path("Models/{$modelName}.php");
        $migrationFileName = database_path("migrations/*_create_{$tableName}_table.php");
        $seederFileName = database_path("seeders/{$modelName}Seeder.php");
        $factoryFileName = database_path("factories/{$modelName}Factory.php");
        $viewDirectory = resource_path("views/livewire/{$tableName}");

        // Check if files exist and confirm deletion
        $filesToRemove = [
            $modelFileName,
            $seederFileName,
            $factoryFileName,
        ];

        // Add migration files
        $filesToRemove = array_merge($filesToRemove, glob($migrationFileName));

        // Add view directory
        if (File::isDirectory($viewDirectory)) {
            $filesToRemove[] = $viewDirectory;
        }

        $filesExist = false;

        foreach ($filesToRemove as $file) {
            if (File::exists($file) || File::isDirectory($file)) {
                $filesExist = true;
                break;
            }
        }

        if ($filesExist) {
            $this->info("Following files will be removed:");
            foreach ($filesToRemove as $file) {
                if (File::exists($file) || File::isDirectory($file)) {
                    $this->info("- " . $file);
                }
            }
            if ($this->confirm('Are you sure you want to undo CRUD for ' . $modelName . '?')) {
                foreach ($filesToRemove as $file) {
                    if (File::exists($file)) {
                        File::delete($file);
                    } elseif (File::isDirectory($file)) {
                        File::deleteDirectory($file);
                    }
                }
                $this->info("CRUD for $modelName has been undone.");
            } else {
                $this->info("Undo operation canceled.");
            }
        } else {
            $this->info("CRUD for $modelName does not exist.");
        }
    }
}
