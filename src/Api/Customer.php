<?php

declare(strict_types=1);

namespace Billogram\Api;

use Billogram\Api;
use Billogram\Api\Models\Customers\Customer as Model;


class Customer extends Api
{
    /**
     * @param array $param
     * @return string|array
     * @link
     */
    public function search(array $param)
    {
        return $this->get('/customer', $param);

    }

    /**
     *
     * @param int   $customerNo
     * @param array $param
     *
     * @link https://billogram.com/api/documentation#customers_fetch
     * @return \Billogram\Api\Models\Customers\Customer
     */
    public function fetch(int $customerNo, array $param)
    {
        return $this->get('/customer/'.$customerNo, $param);
    }

    /**
     * @param Model $costumer
     * @link https://billogram.com/api/documentation#customers_create
     */
    public function create(Model $costumer)
    {
        $this->post('/customer', $costumer->toArray());
    }

    /**
     * @param int                       $customerNo
     * @param Models\Customers\Customer $costumer
     *
     * @link https://billogram.com/api/documentation#customers_edit
     */
    public function update(int $customerNo, Model $costumer)
    {
        if ($customerNo===0) {
            throw new \InvalidArgumentException('Id cannot be empty');
        }
        $this->put('/customer/'.$customerNo, $costumer->toArray());
    }
}
