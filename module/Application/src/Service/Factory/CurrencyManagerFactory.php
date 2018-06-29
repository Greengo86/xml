<?php


namespace Application\Service\Factory;


use Application\Service\CurrencyManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CurrencyManagerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        return new CurrencyManager($entityManager);

    }

}