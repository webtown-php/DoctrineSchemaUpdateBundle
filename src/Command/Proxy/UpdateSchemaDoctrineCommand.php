<?php

namespace Webtown\DoctrineSchemaUpdateBundle\Command\Proxy;

use Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Felülírjuk a `doctrine:schema:update` parancsot
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class UpdateSchemaDoctrineCommand extends UpdateCommand
{
    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('doctrine:schema:update')
            ->setDescription('DON\'T USE THIS! USE THE doctrine:migrations:diff')
            ->setHelp(<<<EOT
Use <info>doctrine:migrations:diff</info> and than <info>doctrine:migrations:migrate</info>!!!
EOT
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("\n\n<fg=white;bg=red>                                          </fg=white;bg=red>");
        $output->writeln("<fg=white;bg=red>        DON'T USE THIS COMMAND!!!!        </fg=white;bg=red>");
        $output->writeln("<fg=white;bg=red>                                          </fg=white;bg=red>\n\n");
        $output->writeln("==> Use <info>doctrine:migrations:diff</info> and than <info>doctrine:migrations:migrate</info>!\n\n");
    }
}
