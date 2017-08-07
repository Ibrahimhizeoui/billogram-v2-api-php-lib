<?php
declare(strict_types=1);

namespace Billogram\Model\Setting;


use Billogram\Model\BaseAddress;

class VisitingAddress extends BaseAddress
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
        $visitingAddress = new self();
        $visitingAddress->careOf = $data['careof'];
        $visitingAddress->streetAddress = $data['street_address'];
        $visitingAddress->zipCode = $data['zipcode'];
        $visitingAddress->city = $data['city'];
        $visitingAddress->country = $data['country'];


        return $visitingAddress;
    }


}