<?php namespace PopcornPHP\Market\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ForceRefresh extends Command
{
    protected $name = 'fr:pm';
    protected $description = 'Force refresh Market plugin';

    public function fire()
    {
        $debug = config('app.debug');

        if ($debug == true) {
            $this->call('plugin:refresh', ['name' => 'PopcornPHP.Market']);
        } else {
            $this->output->writeln('Before this action enable debug mode');
        }
    }

    protected function getArguments()
    {
        return [];
    }

    protected function getOptions()
    {
        return [];
    }
}