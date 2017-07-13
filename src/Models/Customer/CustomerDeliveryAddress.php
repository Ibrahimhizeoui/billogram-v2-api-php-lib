<?php

namespace Billogram\Api\Models\Customers;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class CustomerDeliveryAddress
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $streetAddress;

    /**
     * @var string
     */
    private $careOf;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     *
     * @param string $name
     * @param string $streetAddress
     * @param string $careOf
     * @param string $zipCode
     * @param string $city
     * @param string $country
     */
    public function __construct($name, $streetAddress, $careOf, $zipCode, $city, $country)
    {
        $this->name = $name;
        $this->streetAddress = $streetAddress;
        $this->careOf = $careOf;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->country = $country;
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
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     */
    public function setStreetAddress(string $streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    /**
     * @return string
     */
    public function getCareOf()
    {
        return $this->careOf;
    }

    /**
     * @param string $careOf
     */
    public function setCareOf(string $careOf)
    {
        $this->careOf = $careOf;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}
