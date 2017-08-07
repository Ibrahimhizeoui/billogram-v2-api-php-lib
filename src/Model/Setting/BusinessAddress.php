<?php

declare(strict_types=1);

namespace Billogram\Model\Setting;

use Billogram\Model\BaseAddress;

class BusinessAddress extends BaseAddress
{
    /**
     * Create an API response object from the HTTP response from the API server.
     *
     * @param array $data
     *
     * @return self
     */
    public static function createFromArray(array $data)
    {
        $businessAddress = new self();
        $businessAddress->careOf = $data['careof'];
        $businessAddress->streetAddress = $data['street_address'];
        $businessAddress->zipCode = $data['zipcode'];
        $businessAddress->city = $data['city'];
        $businessAddress->country = $data['country'];

        return $businessAddress;
    }
}
