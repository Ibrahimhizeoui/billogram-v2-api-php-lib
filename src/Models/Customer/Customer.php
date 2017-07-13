<?php

namespace Billogram\Api\Models\Customers;

use Billogram\Api\Models\Customer\CustomerContact;

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

    /**
     * Customer constructor.
     *
     * @param int                     $customerNo
     * @param string                  $name
     * @param string                  $notes
     * @param string                  $orgNo
     * @param string                  $vatNo
     * @param CustomerContact         $contact
     * @param CustomerBillingAddress  $address
     * @param CustomerDeliveryAddress $deliveryAddress
     * @param string                  $companyType
     */
    public function __construct($customerNo, $name, $notes, $orgNo, $vatNo, CustomerContact $contact, CustomerBillingAddress $address, CustomerDeliveryAddress $deliveryAddress, $companyType)
    {
        $this->customerNo = $customerNo;
        $this->name = $name;
        $this->notes = $notes;
        $this->orgNo = $orgNo;
        $this->vatNo = $vatNo;
        $this->contact = $contact;
        $this->address = $address;
        $this->deliveryAddress = $deliveryAddress;
        $this->companyType = $companyType;
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
     */
    public function setCustomerNo(int $customerNo)
    {
        $this->customerNo = $customerNo;
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
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
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
     */
    public function setOrgNo(string $orgNo)
    {
        $this->orgNo = $orgNo;
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
     */
    public function setVatNo(string $vatNo)
    {
        $this->vatNo = $vatNo;
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
     */
    public function setContact(CustomerContact $contact)
    {
        $this->contact = $contact;
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
     */
    public function setAddress(CustomerBillingAddress $address)
    {
        $this->address = $address;
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
     */
    public function setDeliveryAddress(CustomerDeliveryAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
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
     */
    public function setCompanyType(string $companyType)
    {
        $this->companyType = $companyType;
    }

    public function toArray()
    {
        return (array) $this;
    }
}
