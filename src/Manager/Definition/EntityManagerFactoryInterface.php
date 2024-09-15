<?php declare(strict_types=1);

namespace AlanVdb\ORM\Manager\Definition;

use Doctrine\ORM\EntityManager;

interface EntityManagerFactoryInterface
{
    public function createEntityManager(
        array  $dbParams,
        array  $entityDirectories,
        string $proxyDirectory,
        string $proxyNamespace,
        bool   $devMode = true
    ) : EntityManager;
}
