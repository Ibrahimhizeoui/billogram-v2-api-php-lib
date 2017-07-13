<?php

namespace Billogram\Api\Models\Customers;


use Billogram\Api\Models\Customer\CustomerContact;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */

class Customer
{
    /**
     * @var int
     */
    private $customerNo;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $orgNo;

    /**
     * @var string
     */
    private $vatNo;

    /**
     * @var CustomerContact
     */
    private $contact;

    /**
     * @var CustomerBillingAddress
     */
    private $address;

    /**
     * @var CustomerDeliveryAddress
     */
    private $deliveryAddress;

    /**
     * @var string
     */
    private $companyType;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * @param int $customerNo
     * @return Customer
     */
    public function withCustomerNo(int $customerNo)
    {
        $new = clone $this;
        $new->customerNo = $customerNo;
        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Customer
     */
    public function withName(string $name)
    {
        $new = clone $this;
        $new->name = $name;
        return $new;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return Customer
     */
    public function withNotes(string $notes)
    {
        $new = clone $this;
        $new->notes = $notes;
        return $new;
    }

    /**
     * @return string
     */
    public function getOrgNo()
    {
        return $this->orgNo;
    }

    /**
     * @param string $orgNo
     * @return Customer
     */
    public function withOrgNo(string $orgNo)
    {
        $new = clone $this;
        $new->orgNo = $orgNo;
        return $new;
    }

    /**
     * @return string
     */
    public function getVatNo()
    {
        return $this->vatNo;
    }

    /**
     * @param string $vatNo
     * @return Customer
     */
    public function withVatNo(string $vatNo)
    {
        $new = clone $this;
        $new->vatNo = $vatNo;
        return $new;
    }

    /**
     * @return CustomerContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param CustomerContact $contact
     * @return Customer
     */
    public function withContact(CustomerContact $contact)
    {
        $new = clone $this;
        $new->contact = $contact;
        return $new;
    }

    /**
     * @return CustomerBillingAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param CustomerBillingAddress $address
     * @return Customer
     */
    public function withAddress(CustomerBillingAddress $address)
    {
        $new = clone $this;
        $new->address = $address;
        return $new;
    }

    /**
     * @return CustomerDeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param CustomerDeliveryAddress $deliveryAddress
     * @return Customer
     */
    public function withDeliveryAddress(CustomerDeliveryAddress $deliveryAddress)
    {
        $new = clone $this;
        $new->deliveryAddress = $deliveryAddress;
        return $new;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @param string $companyType
     * @return Customer
     */
    public function withCompanyType(string $companyType)
    {
        $new = clone $this;
        $new->companyType = $companyType;
        return $new;
    }

    public function toArray()
    {
        return (array) $this;
    }
}
