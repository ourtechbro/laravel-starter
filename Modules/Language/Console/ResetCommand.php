<?php

namespace Modules\Language\Console;

use Illuminate\Console\Command;
use Modules\Language\Manager;

class ResetCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all translations from the database';

    protected $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->manager->truncateTranslations();
        $this->info('All translations are deleted');
    }
}
