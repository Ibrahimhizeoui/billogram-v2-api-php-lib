<?php

declare(strict_types=1);

namespace Billogram\Model\Invoice;

use Billogram\Model\CreatableFromArray;
use Billogram\Model\Item\BaseItem;
use Billogram\Model\Item\Bookkeeping;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class Item extends BaseItem implements CreatableFromArray
{
    /**
     * @var int count
     */
    private $count;

    /**
     * @var int
     */
    private $discount;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return Item
     */
    public function withCount(int $count)
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     *
     * @return Item
     */
    public function withDiscount(int $discount)
    {
        $new = clone $this;
        $new->discount = $discount;

        return $new;
    }

    public function toArray()
    {
        $data = parent::toArray();
        if ($this->count !== null) {
            $data['count'] = $this->count;
        }
        if ($this->discount !== null) {
            $data['discount'] = $this->discount;
        }

        return $data;
    }

    public static function createFromArray(array $data)
    {
        $item = new self();
        $item->count = $data['count'];
        $item->discount = $data['discount'];
        //$item = $item->withItemNo($data['item_no']) ?? null;
        $item->itemNo = $data['item_no'] ?? null;
        $item->title = $data['title'] ?? null;
        $item->description = $data['description'] ?? null;
        $item->price = $data['price'] ?? null;
        $item->vat = $data['vat'] ?? null;
        $item->unit = $data['unit'] ?? null;
        $item = $item->withBookkeeping(Bookkeeping::createFromArray($data['bookkeeping'])) ?? null;

        return $item;
    }
}
