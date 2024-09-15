<?php declare(strict_types=1);

namespace AlanVdb\ORM\Manager\Factory;

use AlanVdb\ORM\Manager\Definition\EntityManagerFactoryInterface;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AttributeDriver;
use Doctrine\ORM\ORMSetup;
use Doctrine\DBAL\DriverManager;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\PhpFilesAdapter;

class EntityManagerFactory implements EntityManagerFactoryInterface
{
    /**
     * @param string[] $dbParams Database configuration
     * For SQLite : ['driver' => 'pdo_sqlite', 'path' => 'path/to/your/database']
     * For MySQL : [
     *      'driver'   => 'pdo_mysql',
     *      'host'     => '127.0.0.1',
     *      'dbname'   => 'your_database',
     *      'user'     => 'your_username',
     *      'password' => 'your_password'
     * ]
     * @param string[] $entityDirectories
     * @return EntityManager Entity manager configured using attribute metadata
     */
    public function createEntityManager(
        array  $dbParams,
        array  $entityDirectories,
        string $proxyDirectory,
        string $proxyNamespace,
        bool   $devMode = true
    ) : EntityManager {
        
        if ($devMode) {
            $queryCache    = new ArrayAdapter();
            $metadataCache = new ArrayAdapter();
        } else {
            $queryCache    = new PhpFilesAdapter('doctrine_queries');
            $metadataCache = new PhpFilesAdapter('doctrine_metadata');
        }
        $config = new Configuration;
        $config->setMetadataCache($metadataCache);
        $driverImpl = new AttributeDriver($entityDirectories, true);
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCache($queryCache);
        $config->setProxyDir($proxyDirectory);
        $config->setProxyNamespace($proxyNamespace);

        $ormSetup = ORMSetup::createAttributeMetadataConfiguration($entityDirectories, $devMode);
        $conn     = DriverManager::getConnection($dbParams, $ormSetup);

        return new EntityManager($conn, $ormSetup);
    }
}
