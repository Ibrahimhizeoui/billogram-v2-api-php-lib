<?php

declare(strict_types=1);

namespace Billogram\Api;

use Billogram\Api;

class Customer extends Api
{
    /**
     * @param array $param
     */
    public function getAll(array $param)
    {
        $this->get('customer', $param);
    }

    /**
     * @param int   $customerNo
     * @param array $param
     */
    public function getOneCustomer(int $customerNo, array $param)
    {
        if (empty($customerNo)) {
            throw new \InvalidArgumentException('Id cannot be empty');
        }
        $this->get('customer/'.$customerNo, $param);
    }

    /**
     * @param Models\Customers\Customer $costumer
     */
    public function createOneCustomer(Api\Models\Customers\Customer $costumer)
    {
        $this->post('customer', $costumer->toArray());
    }

    /**
     * @param int                       $customerNo
     * @param Models\Customers\Customer $costumer
     */
    public function updateOneCustomer(int $customerNo, Api\Models\Customers\Customer $costumer)
    {
        if (empty($customerNo)) {
            throw new \InvalidArgumentException('Id cannot be empty');
        }
        $this->put('customer/'.$customerNo, $costumer->toArray());
    }

    /**
     * @param int $customerNo
     */
    public function deleteOneCustomer(int $customerNo)
    {
        //There is no delete method in the docs
    }
}
