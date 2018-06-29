<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Offer - представляет товар
 * @ORM\Entity
 * @ORM\Table(name="offer")
 */
class Offer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(name="name")
     */
    protected $name;

    /**
     * @ORM\Column(name="description")
     */
    protected $description;

    /**
     * @ORM\Column(name="picture")
     */
    protected $picture;

    /**
     * @ORM\Column(name="categoryId")
     */
    protected $categoryId;

    /**
     * @ORM\Column(name="price")
     */
    protected $price;

    /**
     * @ORM\Column(name="modified_datetime")
     */
    protected $modified_datetime;

    /**
     * @ORM\Column(name="currencyId")
     */
    protected $currencyId;

    /**
     * @ORM\Column(name="brand_name")
     */
    protected $brand_name;


    //Записываем имя товара.
    public function setName($name)
    {
        $this->name = $name;
    }

    //Записываем описание товара.
    public function setDescription($description)
    {
        $this->description = $description;
    }

    //Записываем картинку.
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    //Записываем id категории
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    //Записываем цену товара
    public function setPrice($price)
    {
        $this->price = $price;
    }

    //Записываем время добавления товара
    public function setModified_datetime($modified_datetime)
    {
        $this->modified_datetime = $modified_datetime;
    }

    //Записываем id вылюты
    public function setCurrencyId($currencyId)
    {
        if(is_null($currencyId)){
            $currencyId = 'RUB';
        }

        $this->currencyId = $currencyId;
    }

    //Записываем бренд товара
    public function setBrand_name($brand_name)
    {
        $this->brand_name = $brand_name;
    }



}