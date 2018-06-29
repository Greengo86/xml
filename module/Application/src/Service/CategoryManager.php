<?php

namespace Application\Service;

use Application\Entity\Category;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Zend\Filter\StaticFilter;

class CategoryManager
{

    /**
     * Doctrine entity manager.
     * @var Entity
     */
    private $entityManager;

    // Конструктор, используемый для внедрения зависимостей в сервис.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Этот метод добавляет новую валюту.
    public function addNewCategory($data)
    {
        $category = new Category();

        $category->setVal($data);
//        $category->setParentId($data['val']);

        $this->entityManager->persist($category);

        $this->entityManager->flush();

    }

}