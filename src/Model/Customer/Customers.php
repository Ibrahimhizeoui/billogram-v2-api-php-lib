<?php
declare(strict_types=1);
namespace Billogram\Model\Customer;
use Billogram\Model\CreatableFromArray;
/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class Customers implements CreatableFromArray
{
    /**
     * @var Customer[]
     */
    private $customers;
    private function __construct(array $customers)
    {
        $this->customers = $customers;
    }
    public static function createFromArray(array $data)
    {
        $customers = [];
        if (isset($data['data'])) {
            foreach ($data['data'] as $item) {
                $customers[] = Customer::createFromArray(['data' => $item]);
            }
        }
        return new self($customers);
    }
    /**
     * @return Customer[]
     */
    public function getCustomer()
    {
        return $this->customers;
    }
}