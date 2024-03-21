<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateCRUD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ball:generate {model : The name of the model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate CRUD for specified model';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modelName = $this->argument('model');
        $tableName = Str::plural(Str::snake($modelName));

        $modelFileName = app_path("Models/{$modelName}.php");
        $migrationFileName = database_path("migrations/" . date('Y_m_d_His') . "_create_{$tableName}_table.php");
        $seederFileName = database_path("seeders/{$modelName}Seeder.php");
        $factoryFileName = database_path("factories/{$modelName}Factory.php");
        $livewireComponentDirectory = app_path("Livewire/{$modelName}");

        $viewDirectory = resource_path("views/livewire/{$tableName}");
        $indexBladeFileName = "{$viewDirectory}/index.blade.php";
        $createBladeFileName = "{$viewDirectory}/create.blade.php";
        $editBladeFileName = "{$viewDirectory}/edit.blade.php";

        // Replace placeholders in stub files with actual values
        $replacements = [
            '{{ModelName}}' => $modelName,
            '{{TableName}}' => Str::studly($tableName),
            '{{tableName}}' => $tableName
        ];

        // Create Model
        $modelContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/model.stub')));
        File::put($modelFileName, $modelContent);

        // Create Migration
        $migrationContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/migration.stub')));
        File::put($migrationFileName, $migrationContent);

        // Create Seeder
        $seederContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/seeder.stub')));
        File::put($seederFileName, $seederContent);

        // Create Factory
        $factoryContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/factory.stub')));
        File::put($factoryFileName, $factoryContent);

        // Create Livewire Component
        File::ensureDirectoryExists($livewireComponentDirectory);
        $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/livewire-components/list.stub')));
        File::put("{$livewireComponentDirectory}/{$modelName}List.php", $livewireContent);

        $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/livewire-components/create.stub')));
        File::put("{$livewireComponentDirectory}/{$modelName}Create.php", $livewireContent);

        $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/livewire-components/edit.stub')));
        File::put("{$livewireComponentDirectory}/{$modelName}Edit.php", $livewireContent);


        // Create Blade View Directory and File
        File::ensureDirectoryExists($viewDirectory);

        $content = $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/blades/index.stub')));
        File::put($indexBladeFileName, $content);

        $content = $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/blades/create.stub')));
        File::put($createBladeFileName, $content);

        $content = $livewireContent = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/blades/edit.stub')));
        File::put($editBladeFileName, $content);

        // Generate Routes
        $this->appendRoutes($replacements);

        $this->info("CRUD generated for $modelName.");
    }

    protected function appendRoutes($replacements)
    {
        $content = str_replace(array_keys($replacements), array_values($replacements), File::get(base_path('stubs/route.stub')));

        File::append(base_path('routes/web.php'), $content);
    }
}
