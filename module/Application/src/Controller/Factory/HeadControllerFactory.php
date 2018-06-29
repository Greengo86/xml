<?php
namespace Application\Controller\Factory;

use Application\Service\CategoryManager;
use Application\Service\CurrencyManager;
use Application\Service\OfferManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Application\Service\HeadManager;
use Application\Controller\HeadController;

/**
 * This is the factory for HeadController. Its purpose is to instantiate the
 * controller.
 */
class HeadControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $currencyManager = $container->get(CurrencyManager::class);
        $offerManager = $container->get(OfferManager::class);
        $categoryManager = $container->get(CategoryManager::class);

        // Instantiate the controller and inject dependencies
        return new HeadController($entityManager, $currencyManager, $offerManager, $categoryManager);
    }
}


