<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseProduct
 *
 * @ORM\Table(name="npp_nn_pur_pro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PurchaseProductRepository")
 */
class PurchaseProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="npp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="npp_amount", type="integer")
     */
    private $amount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Purchase", inversedBy="purchaseProducts")
     * @ORM\JoinColumn(name="pur_oid", referencedColumnName="pur_oid")
     */
    private $purchases;


    /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="pro_oid", referencedColumnName="pro_oid")
     */
    private $products;



    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return PurchaseProduct
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set purchases
     *
     * @param \AppBundle\Entity\Purchase $purchases
     *
     * @return PurchaseProduct
     */
    public function setPurchases(\AppBundle\Entity\Purchase $purchases = null)
    {
        $this->purchases = $purchases;

        return $this;
    }

    /**
     * Get purchases
     *
     * @return \AppBundle\Entity\Purchase
     */
    public function getPurchases()
    {
        return $this->purchases;
    }

    /**
     * Set products
     *
     * @param \AppBundle\Entity\Product $products
     *
     * @return PurchaseProduct
     */
    public function setProducts(\AppBundle\Entity\Product $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProducts()
    {
        return $this->products;
    }
}
