<?php

declare(strict_types=1);

namespace Billogram\Model\Setting;

use Billogram\Model\CreatableFromArray;

class InvoiceDefaults implements CreatableFromArray
{
    /**
     * @var string
     */
    private $defaultMessage;

    /**
     * @var int
     */
    private $defaultInterestRate;

    /**
     * @var int
     */
    private $defaultReminderFee;

    /**
     * @var int
     */
    private $defaultInvoiceFee;

    /**
     * @var AutomaticReminder
     */
    private $automaticReminders;

    /**
     * @var AutomaticWriteOff
     */
    private $automaticWriteoff;

    /**
     * @var AutomaticCollection
     */
    private $automaticCollection;

    /**
     * Create an API response object from the HTTP response from the API server.
     *
     * @param array $data
     *
     * @return self
     */
    public static function createFromArray(array $data)
    {
        $invoiceDefault = new self();
        $invoiceDefault->defaultMessage = $data['default_message'] ?? null;
        $invoiceDefault->defaultInterestRate = $data['default_interest_rate'] ?? null;
        $invoiceDefault->defaultReminderFee = $data['default_reminder_fee'] ?? null;
        $invoiceDefault->defaultInvoiceFee = $data['default_invoice_fee'] ?? null;
        $invoiceDefault->automaticReminders = AutomaticReminder::createFromArray($data['automatic_reminders']);
        $invoiceDefault->automaticWriteoff = AutomaticWriteOff::createFromArray($data['automatic_writeoff']);
        $invoiceDefault->automaticCollection = AutomaticCollection::createFromArray($data['automatic_collection']);
        return null;
    }

    public function toArray()
    {
        $data = [];
        if ($this->defaultMessage !== null){
            $data['default_message'] = $this->defaultMessage;
        }
        if ($this->defaultInterestRate !== null){
            $data['default_interest_rate'] = $this->defaultInterestRate;
        }
        if ($this->defaultReminderFee !== null){
            $data['default_reminder_fee'] = $this->defaultReminderFee;
        }
        if ($this->defaultInvoiceFee !== null){
            $data['default_invoice_fee'] = $this->defaultInvoiceFee;
        }
        if ($this->automaticReminders !== null){
            $data['automatic_reminders'] = $this->automaticReminders->toArray();
        }
        if ($this->automaticWriteoff !== null){
            $data['automatic_reminders'] = $this->automaticWriteoff->toArray();
        }
        if ($this->automaticCollection !== null){
            $data['automatic_reminders'] = $this->automaticCollection->toArray();
        }


        return $data;
    }
}
