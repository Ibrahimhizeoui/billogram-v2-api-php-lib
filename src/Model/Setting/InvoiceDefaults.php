<?php
declare(strict_types=1);

namespace Billogram\Model\Setting;


use Billogram\Model\CreatableFromArray;

class InvoiceDefaults implements CreatableFromArray
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
        return null;
    }

    public function toArray(){
        $data = [];
        return $data;
    }
}