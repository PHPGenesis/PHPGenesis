<?php

namespace PHPGenesis\CLI\Commands;

use Composer;
use EncoreDigitalGroup\Gauntlet\Commands\CommandTraits\CommonInputs;
use EncoreDigitalGroup\Gauntlet\Commands\CommandTraits\ConfigurePrompts;
use EncoreDigitalGroup\Gauntlet\Commands\Common\CommandArgs;
use EncoreDigitalGroup\Gauntlet\Objects\Gauntlet;
use EncoreDigitalGroup\Gauntlet\Objects\Tools\Duster;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    use CommonInputs, ConfigurePrompts;

    public InputInterface $input;
    public OutputInterface $output;

    protected function configure()
    {
        $this
            ->setName('install');
    }

    /**
     * Interact with the user before validating the input.
     *
     * @return void
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        parent::interact($input, $output);

        $this->input = $input;
        $this->output = $output;

        $this->configurePrompts($input, $output);
    }

    /**
     * Execute the command.
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        return Command::SUCCESS;
    }
}
