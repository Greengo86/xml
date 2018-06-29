<?php

namespace Application\Service;

use Application\Entity\Offer;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Zend\Filter\StaticFilter;

class OfferManager
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
    public function addNewOffer($data)
    {
        $offer = new Offer();

        $offer->setName($data['name']);
        $offer->setDescription($data['description']);
        $offer->setPicture($data['picture']);
        $offer->setCategoryId($data['categoryId']);
        $offer->setPrice($data['price']);
        $offer->setModified_datetime($data['modified_datetime']);
        $offer->setCurrencyId($data['currencyId']);
        $offer->setBrand_name($data['brand_name']);

        $this->entityManager->persist($offer);

        $this->entityManager->flush();

    }


}