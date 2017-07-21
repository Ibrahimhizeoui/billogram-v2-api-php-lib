<?php
declare(strict_types=1);

namespace Billogram\Model\Invoice;


class EventData
{
    /**
     * @var string $invoiceNo
     */
    private $invoiceNo;

    /**
     * @var string $deliveryMethod
     */
    private $deliveryMethod;

    /**
     * @var string $letterId
     */
    private $letterId;

    /**
     * @var int $amount
     */
    private $amount;

    /**
     * @var string $payerName
     */
    private $payerName;

    /**
     * @var array $paymentFlags
     */
    private $paymentFlags = [];

    /**
     * @var int $bankingAmount
     */
    private $bankingAmount;

    /**
     * @var bool $manual
     */
    private $manual;

    /**
     * @var int $reminderFee
     */
    private $reminderFee;

    /**
     * @var int $reminderCount
     */
    private $reminderCount;

    /**
     * @var int $interestRate
     */
    private $interestRate;

    /**
     * @var string $customerEmail
     */
    private $customerEmail;

    /**
     * @var string $customerPhone
     */
    private $customerPhone;

    /**
     * @var string $ip
     */
    private $ip;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string[] $message
     */
    private $message;

    /**
     * @var string $fullStatus
     */
    private $fullStatus;

    /**
     * @var string $collectorMethod
     */
    private $collectorMethod;

    /**
     * @var string $collectorReference
     */
    private $collectorReference;

    /**
     * @var string $factoringMethod
     */
    private $factoringMethod;

    /**
     * @var string $factoringReference
     */
    private $factoringReference;

    /**
     * @var int $sellsFor
     */
    private $sellsFor;

    /**
     * @var int $soldFor
     */
    private $soldFor;

    /**
     * @var string $bankgiro
     */
    private $bankgiro;

    /**
     * @var string $recipientIdentifier
     */
    private $recipientIdentifier;

    /**
     * @var string $errorStatus
     */
    private $errorStatus;

    /**
     * @var int $totalSum
     */
    private $totalSum;

    /**
     * @var int $remainingSum
     */
    private $remainingSum;

    /**
     * @var bool $scanningCentral
     */
    private $scanningCentral;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getInvoiceNo(): string
    {
        return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return EventData
     */
    public function withInvoiceNo(string $invoiceNo)
    {
        $new = clone $this;
        $new->invoiceNo = $invoiceNo;
        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod(): string
    {
        return $this->deliveryMethod;
    }

    /**
     * @param string $deliveryMethod
     * @return EventData
     */
    public function withDeliveryMethod(string $deliveryMethod)
    {
        $new = clone $this;
        $new->deliveryMethod = $deliveryMethod;
        return $new;
    }

    /**
     * @return string
     */
    public function getLetterId(): string
    {
        return $this->letterId;
    }

    /**
     * @param string $letterId
     * @return EventData
     */
    public function withLetterId(string $letterId)
    {
        $new = clone $this;
        $new->letterId = $letterId;
        return $new;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return EventData
     */
    public function withAmount(int $amount)
    {
        $new = clone $this;
        $new->amount = $amount;
        return $new;
    }

    /**
     * @return string
     */
    public function getPayerName(): string
    {
        return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return EventData
     */
    public function withPayerName(string $payerName)
    {
        $new = clone $this;
        $new->payerName = $payerName;
        return $new;
    }

    /**
     * @return array
     */
    public function getPaymentFlags(): array
    {
        return $this->paymentFlags;
    }

    /**
     * @param array $paymentFlags
     * @return EventData
     */
    public function withPaymentFlags(array $paymentFlags)
    {
        $new = clone $this;
        $new->paymentFlags = $paymentFlags;
        return $new;
    }

    /**
     * @return int
     */
    public function getBankingAmount(): int
    {
        return $this->bankingAmount;
    }

    /**
     * @param int $bankingAmount
     * @return EventData
     */
    public function withBankingAmount(int $bankingAmount)
    {
        $new = clone $this;
        $new->bankingAmount = $bankingAmount;
        return $new;
    }

    /**
     * @return bool
     */
    public function isManual(): bool
    {
        return $this->manual;
    }

    /**
     * @param bool $manual
     * @return EventData
     */
    public function withManual(bool $manual)
    {

        $new = clone $this;
        $new->manual = $manual;
        return $new;
    }

    /**
     * @return int
     */
    public function getReminderFee(): int
    {
        return $this->reminderFee;
    }

    /**
     * @param int $reminderFee
     * @return EventData
     */
    public function withReminderFee(int $reminderFee)
    {
        $new = clone $this;
        $new->reminderFee = $reminderFee;
        return $new;
    }

    /**
     * @return int
     */
    public function getReminderCount(): int
    {
        return $this->reminderCount;
    }

    /**
     * @param int $reminderCount
     * @return EventData
     */
    public function withReminderCount(int $reminderCount)
    {
        $new = clone $this;
        $new->reminderCount = $reminderCount;
        return $new;
    }

    /**
     * @return int
     */
    public function getInterestRate(): int
    {
        return $this->interestRate;
    }

    /**
     * @param int $interestRate
     * @return EventData
     */
    public function withInterestRate(int $interestRate)
    {
        $new = clone $this;
        $new->interestRate = $interestRate;
        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     * @return EventData
     */
    public function withCustomerEmail(string $customerEmail)
    {
        $new = clone $this;
        $new->customerEmail = $customerEmail;
        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerPhone(): string
    {
        return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     * @return EventData
     */
    public function withCustomerPhone(string $customerPhone)
    {
        $new = clone $this;
        $new->customerPhone = $customerPhone;
        return $new;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return EventData
     */
    public function withIp(string $ip)
    {
        $new = clone $this;
        $new->ip = $ip;
        return $new;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return EventData
     */
    public function withType(string $type)
    {
        $new = clone $this;
        $new->type = $type;
        return $new;
    }

    /**
     * @return \string[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }

    /**
     * @param \string[] $message
     * @return EventData
     */
    public function withMessage(array $message)
    {
        $new = clone $this;
        $new->message = $message;
        return $new;
    }

    /**
     * @return string
     */
    public function getFullStatus(): string
    {
        return $this->fullStatus;
    }

    /**
     * @param string $fullStatus
     * @return EventData
     */
    public function withFullStatus(string $fullStatus)
    {
        $new = clone $this;
        $new->fullStatus = $fullStatus;
        return $new;
    }

    /**
     * @return string
     */
    public function getCollectorMethod(): string
    {
        return $this->collectorMethod;
    }

    /**
     * @param string $collectorMethod
     * @return EventData
     */
    public function setCollectorMethod(string $collectorMethod)
    {
        $new = clone $this;
        $new->collectorMethod = $collectorMethod;
        return $new;
    }


    /**
     * @return string
     */
    public function getCollectorReference(): string
    {
        return $this->collectorReference;
    }

    /**
     * @param string $collectorReference
     * @return EventData
     */
    public function withCollectorReference(string $collectorReference)
    {
        $new = clone $this;
        $new->collectorReference = $collectorReference;
        return $new;
    }

    /**
     * @return string
     */
    public function getFactoringMethod(): string
    {
        return $this->factoringMethod;
    }

    /**
     * @param string $factoringMethod
     * @return EventData
     */
    public function withFactoringMethod(string $factoringMethod)
    {
        $new = clone $this;
        $new->factoringMethod = $factoringMethod;
        return $new;
    }

    /**
     * @return string
     */
    public function getFactoringReference(): string
    {
        return $this->factoringReference;
    }

    /**
     * @param string $factoringReference
     * @return EventData
     */
    public function withFactoringReference(string $factoringReference)
    {
        $new = clone $this;
        $new->factoringReference = $factoringReference;
        return $new;
    }

    /**
     * @return int
     */
    public function getSellsFor(): int
    {
        return $this->sellsFor;
    }

    /**
     * @param int $sellsFor
     * @return EventData
     */
    public function withSellsFor(int $sellsFor)
    {
        $new = clone $this;
        $new->sellsFor = $sellsFor;
        return $new;
    }

    /**
     * @return int
     */
    public function getSoldFor(): int
    {
        return $this->soldFor;
    }

    /**
     * @param int $soldFor
     * @return EventData
     */
    public function withSoldFor(int $soldFor)
    {
        $new = clone $this;
        $new->soldFor = $soldFor;
        return $new;
    }

    /**
     * @return string
     */
    public function getBankgiro(): string
    {
        return $this->bankgiro;
    }

    /**
     * @param string $bankgiro
     * @return EventData
     */
    public function withBankgiro(string $bankgiro)
    {
        $new = clone $this;
        $new->bankgiro = $bankgiro;
        return $new;
    }

    /**
     * @return string
     */
    public function getRecipientIdentifier(): string
    {
        return $this->recipientIdentifier;
    }

    /**
     * @param string $recipientIdentifier
     * @return EventData
     */
    public function withRecipientIdentifier(string $recipientIdentifier)
    {
        $new = clone $this;
        $new->recipientIdentifier = $recipientIdentifier;
        return $new;
    }

    /**
     * @return string
     */
    public function getErrorStatus(): string
    {
        return $this->errorStatus;
    }

    /**
     * @param string $errorStatus
     * @return EventData
     */
    public function withErrorStatus(string $errorStatus)
    {
        $new = clone $this;
        $new->errorStatus = $errorStatus;
        return $new;
    }

    /**
     * @return int
     */
    public function getTotalSum(): int
    {
        return $this->totalSum;
    }

    /**
     * @param int $totalSum
     * @return EventData
     */
    public function withTotalSum(int $totalSum)
    {
        $new = clone $this;
        $new->totalSum = $totalSum;
        return $new;
    }

    /**
     * @return int
     */
    public function getRemainingSum(): int
    {
        return $this->remainingSum;
    }

    /**
     * @param int $remainingSum
     * @return EventData
     */
    public function withRemainingSum(int $remainingSum)
    {
        $new = clone $this;
        $new->remainingSum = $remainingSum;
        return $new;
    }

    /**
     * @return mixed
     */
    public function getScanningCentral()
    {
        return $this->scanningCentral;
    }

    /**
     * @param bool $scanningCentral
     * @return EventData
     */
    public function withScanningCentral(bool $scanningCentral)
    {
        $new = clone $this;
        $new->scanningCentral = $scanningCentral;
        return $new;
    }

    public function toArray(){
        $data = [];
        if ($this->invoiceNo !== null) {
            $data['invoice_no'] = $this->invoiceNo;
        }
        if ($this->deliveryMethod !== null) {
            $data['delivery_method'] = $this->deliveryMethod ?? null;
        }
        if ($this->letterId !== null) {
            $data['letter_id'] = $this->letterId ?? null;
        }
        if ($this->amount !== null) {
            $data['amount'] = $this->amount ?? null;
        }
        if ($this->paymentFlags !== null) {
            $data['payment_flags'] = $this->paymentFlags;
        }
        if ($this->bankingAmount !== null) {
            $data['banking_amount'] = $this->bankingAmount;
        }
        if ($this->manual !== null) {
            $data['manual'] = $this->manual ?? null;
        }
        if ($this->reminderFee !== null) {
            $data['reminder_fee'] = $this->reminderFee ?? null;
        }
        if ($this->reminderCount !== null) {
            $data['reminder_count'] = $this->reminderCount ?? null;
        }
        if ($this->interestRate !== null) {
            $data['interest_rate'] = $this->interestRate;
        }
        if ($this->customerPhone !== null) {
            $data['customer_phone'] = $this->customerPhone;
        }
        if ($this->customerEmail !== null) {
            $data['customer_email'] = $this->customerEmail ?? null;
        }
        if ($this->ip !== null) {
            $data['ip'] = $this->ip ?? null;
        }
        if ($this->type !== null) {
            $data['type'] = $this->type ?? null;
        }
        if ($this->message !== null) {
            $data['message'] = $this->message;
        }
        if ($this->fullStatus !== null) {
            $data['full_status'] = $this->fullStatus;
        }
        if ($this->collectorMethod !== null) {
            $data['collector_method'] = $this->collectorMethod ?? null;
        }
        if ($this->collectorReference !== null) {
            $data['collector_reference'] = $this->collectorReference ?? null;
        }
        if ($this->factoringMethod !== null) {
            $data['factoring_method'] = $this->factoringMethod ?? null;
        }
        if ($this->factoringReference !== null) {
            $data['factoring_reference'] = $this->factoringReference;
        }
        if ($this->sellsFor !== null) {
            $data['sells_for'] = $this->sellsFor ?? null;
        }
        if ($this->soldFor !== null) {
            $data['sold_for'] = $this->soldFor ?? null;
        }
        if ($this->bankgiro !== null) {
            $data['bankgiro'] = $this->bankgiro;
        }
        if ($this->recipientIdentifier !== null) {
            $data['recipient_identifier'] = $this->recipientIdentifier ?? null;
        }
        if ($this->errorStatus !== null) {
            $data['error_status'] = $this->errorStatus;
        }
        if ($this->totalSum !== null) {
            $data['total_sum'] = $this->totalSum ?? null;
        }
        if ($this->remainingSum !== null) {
            $data['remaining_sum'] = $this->remainingSum ?? null;
        }
        if ($this->scanningCentral !== null) {
            $data['scanning_central'] = $this->scanningCentral;
        }
        return $data;
    }
}