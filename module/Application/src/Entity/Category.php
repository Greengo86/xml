<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Offer - представляет категорию товара
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(name="category_name")
     */
    protected $category_name;

    /**
     * @ORM\Column(name="parent_id")
     */
    protected $parent_id;


    //Записываем номер категории.
    public function setVal($category_name)
    {
        $this->category_name = $category_name;
    }

    //Записываем значение(номер) родительской категории
    public function setParentId($parent_id)
    {
        $this->parent_id = $parent_id;
    }

}