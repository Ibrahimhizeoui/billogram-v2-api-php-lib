<?php

namespace Billogram\Model\Customer;
use Billogram\Model\CreatableFromArray;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */

class Customer implements CreatableFromArray
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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

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

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public static function createFromArray(array $data): Customer
    {

        $customer = new self();
        if (array_key_exists('data', $data)) {
            $customerArray = $data['data'];
            $contactArray = $customerArray['contact'];
            $addressArray = $customerArray['address'];
            $deliveryAddressArray = $customerArray['delivery_address'];

            $contact = CustomerContact::createFromArray($contactArray);
            $address = CustomerBillingAddress::createFromArray($addressArray);
            $deliveryAddress = CustomerDeliveryAddress::createFromArray($deliveryAddressArray);
            $customer->contact = $contact;
            $customer->address = $address;
        } else {
            $customerArray = $data;
            $deliveryAddressArray = $customerArray['address'] ?? null;
            $deliveryAddress = CustomerDeliveryAddress::createFromArray(['name' => $customerArray['name'] ?? null, 'street_address' => $deliveryAddressArray['street_address'], 'careof' => $deliveryAddressArray['careof'], 'zipcode' => $deliveryAddressArray['zipcode'], 'city' => $deliveryAddressArray['city'], 'country' => $deliveryAddressArray['country']]) ?? null;
            $contact = CustomerContact::createFromArray(['name' => $customerArray['name'], 'email' => $customerArray['email'], 'phone' => $customerArray['phone'] ?? null]) ?? null;
        }
        $customer->deliveryAddress = $deliveryAddress ?? null;
        $customer->contact = $contact ?? null;
        $customer->customerNo = $customerArray['customer_no'] ?? null;
        $customer->name = $customerArray['name'] ?? null;
        $customer->notes = $customerArray['notes'] ?? null;
        $customer->orgNo = $customerArray['org_no'] ?? null;
        $customer->vatNo = $customerArray['vat_no'] ?? null;

        $customer->createdAt = $customerArray['created_at'] ?? null;
        $customer->updatedAt = $customerArray['updated_at'] ?? null;
        $customer->companyType = $customerArray['company_type'] ?? null;

        return $customer;
    }

    public function toArray()
    {
        //$data['customer_no'] = $this->orgNo ?? null;
        $data['name'] = $this->name ?? null;
        $data['notes'] = $this->notes ?? null;
        $data['org_no'] = $this->orgNo ?? null;
        $data['vat_no'] = $this->vatNo ?? null;
        $data['contact'] = ['name' => $this->contact->getName() , 'email' => $this->contact->getEmail(), 'phone' => $this->contact->getPhone()] ?? null;
        $data['address'] = ['careof' => $this->address->getCareOf(), 'use_careof_as_attention' => $this->address->isUseCareOfAsAttention(), 'street_address' => $this->address->getStreetAddress(), 'zipcode' => $this->address->getZipCode(), 'city' => $this->address->getCity(), 'country' => $this->address->getCountry()];
        $data['delivery_address'] = ['name' => $this->deliveryAddress->getCareOf(), 'street_address' => $this->deliveryAddress->getStreetAddress(), 'careof' => $this->deliveryAddress->getCareOf(), 'zipcode' => $this->deliveryAddress->getZipCode(), 'city' => $this->deliveryAddress->getCity(), 'country' => $this->deliveryAddress->getCountry()] ?? null;


        return $data;
    }
}
