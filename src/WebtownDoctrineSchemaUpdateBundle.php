<?php

/**
 * Erre azért van szükség, hogy a <info>doctrine:schema:update</infor> parancsot
 * felülírjuk, ugyanis mindenképpen a migrálást kell használni a deployment miatt.
 */
namespace Webtown\DoctrineSchemaUpdateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WebtownDoctrineSchemaUpdateBundle extends Bundle
{
    public function getParent()
    {
        return 'DoctrineBundle';
    }
}
