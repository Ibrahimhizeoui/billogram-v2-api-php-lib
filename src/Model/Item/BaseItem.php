<?php

declare(strict_types=1);

namespace Billogram\Model\Item;

use Billogram\Model\CreatableFromArray;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
abstract class BaseItem implements CreatableFromArray
{
    /**
     * @var int
     */
    protected $itemNo;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var float
     */
    protected $vat;

    /**
     * @var string
     */
    protected $unit;

    /**
     * @var Bookkeeping
     */
    protected $bookkeeping;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @return int
     */
    public function getItemNo(): int
    {
        return $this->itemNo;
    }

    /**
     * @param int $itemNo
     *
     * @return Item
     */
    public function withItemNo(int $itemNo)
    {
        $new = clone $this;
        $new->itemNo = $itemNo;

        return $new;
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
     *
     * @return Item
     */
    public function withTitle(string $title)
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
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
     *
     * @return Item
     */
    public function withDescription(string $description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Item
     */
    public function withPrice(float $price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
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
     *
     * @return Item
     */
    public function withVat(float $vat)
    {
        $new = clone $this;
        $new->vat = $vat;

        return $new;
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
     *
     * @return Item
     */
    public function withUnit(string $unit)
    {
        $new = clone $this;
        $new->unit = $unit;

        return $new;
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
     *
     * @return Item
     */
    public function withBookkeeping(Bookkeeping $bookkeeping)
    {
        $new = clone $this;
        $new->bookkeeping = $bookkeeping;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Create an API response object from the HTTP response from the API server.
     *
     * @return array
     */
    public function toArray()
    {
        $data = [];
        if ($this->title !== null) {
            $data['title'] = $this->title;
        }
        if ($this->itemNo !== null) {
            $data['item_no'] = $this->itemNo;
        }
        if ($this->description !== null) {
            $data['description'] = $this->description ?? null;
        }
        if ($this->price !== null) {
            $data['price'] = $this->price ?? null;
        }
        if ($this->vat !== null) {
            $data['vat'] = $this->vat ?? null;
        }
        if ($this->unit !== null) {
            $data['unit'] = $this->unit;
        }
        if ($this->bookkeeping !== null) {
            $data['bookkeeping'] = $this->bookkeeping->toArray();
        }

        return $data;
    }
}
