<?php

declare(strict_types=1);

namespace Billogram\Model\Setting;

use Billogram\Model\BaseAddress;

class InvoiceAddress extends BaseAddress
{
    /**
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return InvoiceAddress
     */
    public function withEmail(string $email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
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
        $invoiceAddress = new self();
        $invoiceAddress->careOf = $data['careof'];
        $invoiceAddress->streetAddress = $data['street_address'];
        $invoiceAddress->zipCode = $data['zipcode'];
        $invoiceAddress->city = $data['city'];
        $invoiceAddress->country = $data['country'];
        $invoiceAddress->email = $data['email'];

        return $invoiceAddress;
    }

    public function toArray()
    {
        $data = parent::toArray();
        if ($this->email !== null) {
            $data['email'] = $this->email;
        }
    }
}
