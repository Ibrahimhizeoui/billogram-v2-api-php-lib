<?php
declare(strict_types=1);
namespace Billogram\Model\Invoice;
use Billogram\Model\CreatableFromArray;
/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */
class AdditionalInformation implements CreatableFromArray
{
    /**
     * @var string
     */
    private $orderNo;
    /**
     * @var string
     */
    private $orderDate;
    /**
     * @var string
     */
    private $ourReference;
    /**
     * @var string
     */
    private $yourReference;
    /**
     * @var string
     */
    private $shippingDate;
    /**
     * @var string
     */
    private $deliveryDate;
    /**
     * @var string
     */
    private $referenceNumber;
    /**
     * @var string
     */
    private $message;
    public function __construct()
    {
    }
    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }
    /**
     * @param string $orderNo
     *
     * @return AdditionalInformation
     */
    public function withOrderNo(string $orderNo)
    {
        $new = clone $this;
        $new->orderNo = $orderNo;
        return $new;
    }
    /**
     * @return string
     */
    public function getOrderDate(): string
    {
        return $this->orderDate;
    }
    /**
     * @param string $orderDate
     *
     * @return AdditionalInformation
     */
    public function withOrderDate(string $orderDate)
    {
        $new = clone $this;
        $new->orderDate = $orderDate;
        return $new;
    }
    /**
     * @return string
     */
    public function getOurReference(): string
    {
        return $this->ourReference;
    }
    /**
     * @param string $ourReference
     *
     * @return AdditionalInformation
     */
    public function withOurReference(string $ourReference)
    {
        $new = clone $this;
        $new->ourReference = $ourReference;
        return $new;
    }
    /**
     * @return string
     */
    public function getYourReference(): string
    {
        return $this->yourReference;
    }
    /**
     * @param string $yourReference
     *
     * @return AdditionalInformation
     */
    public function withYourReference(string $yourReference)
    {
        $new = clone $this;
        $new->yourReference = $yourReference;
        return $new;
    }
    /**
     * @return string
     */
    public function getShippingDate(): string
    {
        return $this->shippingDate;
    }
    /**
     * @param string $shippingDate
     *
     * @return AdditionalInformation
     */
    public function withShippingDate(string $shippingDate)
    {
        $new = clone $this;
        $new->shippingDate = $shippingDate;
        return $new;
    }
    /**
     * @return string
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }
    /**
     * @param string $deliveryDate
     *
     * @return AdditionalInformation
     */
    public function withDeliveryDate(string $deliveryDate)
    {
        $new = clone $this;
        $new->deliveryDate = $deliveryDate;
        return $new;
    }
    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * @param string $referenceNumber
     *
     * @return AdditionalInformation
     */
    public function withReferenceNumber(string $referenceNumber)
    {
        $new = clone $this;
        $new->referenceNumber = $referenceNumber;
        return $new;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param $message
     *
     * @return AdditionalInformation
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;
        return $new;
    }
    public function toArray()
    {
        $data = [];
        if ($this->orderNo !== null) {
            $data['order_no'] = $this->orderNo;
        }
        if ($this->orderDate !== null) {
            $data['order_date'] = $this->orderDate ?? null;
        }
        if ($this->ourReference !== null) {
            $data['our_reference'] = $this->ourReference ?? null;
        }
        if ($this->yourReference !== null) {
            $data['your_reference'] = $this->yourReference ?? null;
        }
        if ($this->shippingDate !== null) {
            $data['shipping_date'] = $this->shippingDate;
        }
        if ($this->deliveryDate !== null) {
            $data['delivery_date'] = $this->deliveryDate;
        }
        if ($this->referenceNumber !== null) {
            $data['reference_number'] = $this->referenceNumber;
        }
        if ($this->message !== null) {
            $data['message'] = $this->message;
        }
        return $data;
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
        $info = new self();
        $info->orderNo = $data['order_no'];
        $info->orderDate = $data['order_date'];
        $info->ourReference = $data['our_reference'];
        $info->yourReference = $data['your_reference'];
        $info->shippingDate = $data['shipping_date'];
        $info->deliveryDate = $data['delivery_date'];
        $info->referenceNumber = $data['reference_number'];
        $info->message = $data['message'];
    }
}