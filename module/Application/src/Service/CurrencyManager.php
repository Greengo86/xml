<?php

namespace Application\Service;

use Application\Entity\Currency;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Zend\Filter\StaticFilter;

class  CurrencyManager
{

    /**
     * Entity manager.
     * @var Entity
     */
    private $entityManager;

    // Конструктор, используемый для внедрения зависимостей в сервис.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Этот метод добавляет новую валюту.
    public function addNewCurrency($data)
    {
        $currency = new Currency();

        $currency->setRate($data['rate']);
        $currency->setVal($data['id']);

        $this->entityManager->persist($currency);

        $this->entityManager->flush();

    }


}