<?php
declare(strict_types=1);

namespace Billogram\Model\Customer;
use Billogram\Model\CreatableFromArray;
use Billogram\Model\Item\Bookkeeping;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class Item implements CreatableFromArray
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
     * @return Item
     */
    public function withItemNo(string $itemNo)
    {
        $new = clone $this;
        $this->itemNo = $itemNo;
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
     * @return Item
     */
    public function withTitle(string $title)
    {
        $new = clone $this;
        $this->title = $title;
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
     * @return Item
     */
    public function withDescription(string $description)
    {
        $new = clone $this;
        $this->description = $description;
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
     * @param string $price
     * @return Item
     */
    public function withPrice(string $price)
    {
        $new = clone $this;
        $this->price = $price;
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
     * @return Item
     */
    public function withVat(float $vat)
    {
        $new = clone $this;
        $this->vat = $vat;
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
     * @return Item
     */
    public function withUnit(string $unit)
    {
        $new = clone $this;
        $this->unit = $unit;
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
     * @return Item
     */
    public function withBookkeeping(Bookkeeping $bookkeeping)
    {
        $new = clone $this;
        $this->bookkeeping = $bookkeeping;
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
     * @param array $data
     *
     * @return self
     */
    public static function createFromArray(array $data)
    {
        $item = new self();
        $item->itemNo = $data['data']['item_no'] ?? null;
        $item->title = $data['data']['title'] ?? null;
        $item->description = $data['data']['description'] ?? null;
        $item->price = $data['data']['price'] ?? null;
        $item->vat = $data['data']['vat'] ?? null;
        $item->unit = $data['data']['unit'] ?? null;
        $item = $item->bookkeeping->withIncomeAccount( $data['data']['income_account']);
        $item =$item->bookkeeping->withVatAccount( $data['data']['vat_account']);
        $item->createdAt = $data['data']['created_at'];
        $item->updatedAt = $data['data']['updated_at'] ?? null;
    }
}