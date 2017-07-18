<?php
declare(strict_types=1);

namespace Billogram\Model\Customer;
use Billogram\Model\CreatableFromArray;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class Item /*implements CreatableFromArray*/
{
    /**
     * @var string
     */
    private $itemNo;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $price;

    /**
     * @var float
     */
    private $vat;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var Bookkeeping
     */
    private $bookkeeping;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * @return string
     */
    public function getItemNo(): string
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo(string $itemNo)
    {
        $new = clone $this;
        $this->itemNo = $itemNo;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $new = clone $this;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $new = clone $this;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(string $price)
    {
        $new = clone $this;
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getVat(): float
    {
        return $this->vat;
    }

    /**
     * @param float $vat
     */
    public function setVat(float $vat)
    {
        $new = clone $this;
        $this->vat = $vat;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit)
    {
        $new = clone $this;
        $this->unit = $unit;
    }

    /**
     * @return Bookkeeping
     */
    public function getBookkeeping(): Bookkeeping
    {
        return $this->bookkeeping;
    }

    /**
     * @param Bookkeeping $bookkeeping
     */
    public function setBookkeeping(Bookkeeping $bookkeeping)
    {
        $new = clone $this;
        $this->bookkeeping = $bookkeeping;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $new = clone $this;
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $new = clone $this;
        $this->updatedAt = $updatedAt;
    }



}