<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TraitMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }

    /**
     * The console command description.
    *
    * @var string
    */
    protected $description = 'Create a new trait';

    /**
     * The type of class being generated.
    *
    * @var string
    */
    protected $type = 'Trait';

    /**
     * Get the stub file for the generator.
    *
    * @return string
    */
    protected function getStub()
    {
                base_path('/stubs/trait.stub');
    }

    /**
     * Get the default namespace for the class.
    *
    * @param  string  $rootNamespace
    * @return string
    */
    protected function getDefaultNamespace($rootNamespace)
    {
                return $rootNamespace.'\Traits';
    }
}
