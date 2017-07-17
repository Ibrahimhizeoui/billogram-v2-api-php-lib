<?php
declare(strict_types=1);

namespace Billogram\Model\Customer;


use Billogram\Exception\InvalidArgumentException;
use Billogram\Model\CreatableFromArray;

class Customers implements CreatableFromArray
{
    /**
     * @var Customer[]
     */
    private $customers;


    private function __construct(array $customers)
    {
        foreach ($customers as $customer) {
            if (!$customers instanceof Customer) {
                throw new InvalidArgumentException('All tweets must be an instance of '.Customer::class);
            }
        }
        $this->customers = $customers;

    }

    public static function createFromArray(array $data)
    {
        $customers = [];
        if (isset($data['$customers'])) {
            foreach ($data['$customers'] as $item) {
                $customers[] = Customer::createFromArray($item);
            }
        }

        return new self($customers);

    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customers;
    }
}