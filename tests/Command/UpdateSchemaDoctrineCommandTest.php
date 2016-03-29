<?php

namespace Webtown\DoctrineBundle\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Webtown\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand;

// @todo (Chris) FIXME
class UpdateSchemaDoctrineCommandTest extends WebTestCase
{
    public function testCase1()
    {
        $kernel = $this->createKernel();
        $kernel->boot();
        $application = new Application($kernel);
        $application->add(new UpdateSchemaDoctrineCommand());
        $command = $application->find('doctrine:schema:update');
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'command' => $command->getName(),
        ]);
        $output = $commandTester->getDisplay();
        $this->assertRegExp("/DON'T USE THIS COMMAND/", $output);
    }
}
