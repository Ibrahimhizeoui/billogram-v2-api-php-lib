<?php

declare(strict_types=1);

namespace Billogram\Api;

use Billogram\Api;
use Billogram\Api\Models\Customers\Customer as Model;


class Customer extends Api
{
    /**
     * @param array $param
     *
     * @link https://billogram.com/api/v2/customer
     */
    public function getAll(array $param)
    {
        $this->get('/customer', $param);
    }

    /**
     *
     * @param int   $customerNo
     * @param array $param
     *
     * @link https://billogram.com/api/v2/customer/$customerNo
     *
     */
    public function getOneCustomer(int $customerNo, array $param)
    {
        if ($customerNo===0) {
            throw new \InvalidArgumentException('Id cannot be empty');
        }
        $this->get('/customer/'.$customerNo, $param);
    }

    /**
     * @param Model $costumer
     *
     * @link https://billogram.com/api/v2/customer
     */
    public function createOneCustomer(Model $costumer)
    {
        $this->post('/customer', $costumer->toArray());
    }

    /**
     * @param int                       $customerNo
     * @param Models\Customers\Customer $costumer
     *
     * @link https://billogram.com/api/v2/customer/$customerNo
     */
    public function updateOneCustomer(int $customerNo, Model $costumer)
    {
        if ($customerNo===0) {
            throw new \InvalidArgumentException('Id cannot be empty');
        }
        $this->put('/customer/'.$customerNo, $costumer->toArray());
    }
}
