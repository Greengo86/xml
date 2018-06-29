<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This Class represents currency
 * @ORM\Entity
 * @ORM\Table(name="currency")
 */
class Currency
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="val")
     */
    protected $val;

    /**
     * @ORM\Column(name="rate")
     */
    protected $rate;


    /**
     * Set val for this currency
     * @param $val
     */
    public function setVal($val)
    {
        $this->val = $val;
    }


    /**
     * Set rate for this currency
     * @param $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

}