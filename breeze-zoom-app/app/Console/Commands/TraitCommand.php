<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new trait';

    /**
     * The type of class being generated
     *
     * @var string
     */
    protected $type = 'Trait';

    /**
     * Get the Stub file for the Generator
     *
     * @return string
     */
    public function getStub()
    {
        return app_path('Console/Stubs/trait.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNameSpace
     *
     * @return string
     */
    public function getDefaultNameSpace($rootNameSpace)
    {
        return $rootNameSpace . '\Traits';
    }
}
