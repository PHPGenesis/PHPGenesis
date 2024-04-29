<?php

namespace PHPGenesis\CLI\Commands;

use PHPGenesis\CLI\Commands\CommandTraits\CommonInputs;
use PHPGenesis\CLI\Commands\CommandTraits\ConfigurePrompts;
use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Config\CommonConfig;
use PHPGenesis\Common\Config\Packages;
use PHPGenesis\Common\Config\PhpGenesisConfig;
use PHPGenesis\Logger\Config\LoggerConfig;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
        $config = new PhpGenesisConfig();
        if (Composer::installed(str_enum_val(Packages::Logger), true)) {
            $config->logger = new LoggerConfig();
        }

        $config = json_encode($config, JSON_PRETTY_PRINT);

        file_put_contents(CommonConfig::basePath('/' . CommonConfig::FILE_NAME), $config);

        return Command::SUCCESS;
    }
}
