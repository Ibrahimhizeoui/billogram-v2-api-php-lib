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
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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
        $customer->customerNo = $data['customerNo'] ?? null;
        $customer->name = $data['name'] ?? null;
        $customer->notes = $data['notes'] ?? null;
        $customer->orgNo = $data['orgNo'] ?? null;
        $customer->vatNo = $data['vatNo'] ?? null;
        $customer->contact->setName($data['contact']['name'] ?? null);
        $customer->contact->setEmail($data['contact']['email'] ?? null);
        $customer->contact->setPhone($data['contact']['phone'] ?? null);
        $customer->withAddress(new CustomerBillingAddress($data['address']['careOf'], $data['address']['useCareOfAsAttention'], $data['address']['streetAddress'], $data['address']['zipCode'], $data['address']['city'], $data['address']['country']));
        $customer->withDeliveryAddress(new CustomerDeliveryAddress($data['address']['name'], $data['address']['streetAddress'], $data['address']['careOf'], $data['address']['zipCode'], $data['address']['city'], $data['address']['country']));
        $customer->createdAt = $data['createdAt'];
        $customer->updatedAt = $data['updatedAt'];
         return $customer;
    }

    public function toArray()
    {
        $data['customerNo'] = $this->orgNo ?? null;
        $data['name'] = $this->name ?? null;
        $data['notes'] = $this->notes ?? null;
        $data['orgNo'] = $this->orgNo ?? null;
        $data['vatNo'] = $this->vatNo ?? null;
        $data['contact'][]=['name' => $this->contact->getName() , 'email' => $this->contact->getEmail(), 'phone' => $this->contact->getPhone()] ?? null;
        $data['address']['careOf'] = $this->address->getCareOf();
        $data['address']['useCareOfAsAttention'] = $this->address->isUseCareOfAsAttention() ?? null;
        $data['address']['streetAddress'] = $this->address->getStreetAddress() ?? null;
        $data['address']['zipCode'] = $this->address->getZipCode() ?? null;
        $data['address']['city'] = $this->address->getCity() ?? null;
        $data['address']['country'] = $this->address->getCountry() ?? null;
        $data['deliveryAddress']['careOf'] = $this->deliveryAddress->getCareOf() ?? null;
        $data['deliveryAddress']['streetAddress'] = $this->deliveryAddress->getStreetAddress() ?? null;
        $data['deliveryAddress']['careOf'] = $this->deliveryAddress->getCareOf() ?? null;
        $data['deliveryAddress']['zipCode'] = $this->deliveryAddress->getZipCode() ?? null;
        $data['deliveryAddress']['city'] = $this->deliveryAddress->getCity() ?? null;
        $data['deliveryAddress']['country'] = $this->deliveryAddress->getCountry() ?? null;

        $data['createdAt'] = $this->getCreatedAt() ?? null;
        $data['updatedAt'] = $this->getUpdatedAt() ?? null;

        return $data;
    }
}
