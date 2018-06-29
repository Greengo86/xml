<?php
/**
 * Created by PhpStorm.
 * User: artembelakov
 * Date: 27.06.2018
 * Time: 18:46
 */

namespace Application\Service\Factory;


use Application\Entity\Category;
use Application\Service\CategoryManager;
use Application\Service\OfferManager;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class CategoryManagerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // TODO: Implement __invoke() method.
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

         return new CategoryManager($entityManager);
    }

}