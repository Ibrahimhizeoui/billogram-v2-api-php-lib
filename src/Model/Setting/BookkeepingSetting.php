<?php

declare(strict_types=1);

namespace Billogram\Model\Setting;

use Billogram\Model\CreatableFromArray;

class BookkeepingSetting implements CreatableFromArray
{
    /**
     * @var string
     */
    private $incomeAccountForVat25;

    /**
     * @var string
     */
    private $incomeAccountForVat12;

    /**
     * @var string
     */
    private $incomeAccountForVat6;

    /**
     * @var string
     */
    private $incomeAccountForVat0;

    /**
     * @var string
     */
    private $reversedVatAccount;

    /**
     * @var string
     */
    private $vatAccountForVat25;

    /**
     * @var string
     */
    private $vatAccountForVat12;

    /**
     * @var string
     */
    private $vatAccountForVat6;

    /**
     * @var string
     */
    private $accountReceivableAccount;

    /**
     * @var string
     */
    private $clientFundsAccount;

    /**
     * @var string
     */
    private $bankingAccount;

    /**
     * @var string
     */
    private $interestFeeAccount;

    /**
     * @var string
     */
    private $reminderFeeAccount;

    /**
     * @var string
     */
    private $roundingAccount;

    /**
     * @var string
     */
    private $factoringReceivableAccount;

    /**
     * @var string
     */
    private $nonAllocatedAccount;

    /**
     * @var string
     */
    private $incomePayoutAccount;

    /**
     * @var string
     */
    private $writtenDownReceivablesAccount;

    /**
     * @var string
     */
    private $expectedLossAccount;

    /**
     * @var array
     */
    private $regionalSweden;

    /**
     * @return string
     */
    public function getIncomeAccountForVat25(): string
    {
        return $this->incomeAccountForVat25;
    }

    /**
     * @param string $incomeAccountForVat25
     *
     * @return BookkeepingSetting
     */
    public function withIncomeAccountForVat25(string $incomeAccountForVat25)
    {
        $new = clone $this;
        $new->incomeAccountForVat25 = $incomeAccountForVat25;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncomeAccountForVat12(): string
    {
        return $this->incomeAccountForVat12;
    }

    /**
     * @param string $incomeAccountForVat12
     *
     * @return BookkeepingSetting
     */
    public function withIncomeAccountForVat12(string $incomeAccountForVat12)
    {
        $new = clone $this;
        $new->incomeAccountForVat12 = $incomeAccountForVat12;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncomeAccountForVat6(): string
    {
        return $this->incomeAccountForVat6;
    }

    /**
     * @param string $incomeAccountForVat6
     *
     * @return BookkeepingSetting
     */
    public function withIncomeAccountForVat6(string $incomeAccountForVat6)
    {
        $new = clone $this;
        $new->incomeAccountForVat6 = $incomeAccountForVat6;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncomeAccountForVat0(): string
    {
        return $this->incomeAccountForVat0;
    }

    /**
     * @param string $incomeAccountForVat0
     *
     * @return BookkeepingSetting
     */
    public function withIncomeAccountForVat0(string $incomeAccountForVat0)
    {
        $new = clone $this;
        $new->incomeAccountForVat0 = $incomeAccountForVat0;

        return $new;
    }

    /**
     * @return string
     */
    public function getReversedVatAccount(): string
    {
        return $this->reversedVatAccount;
    }

    /**
     * @param string $reversedVatAccount
     *
     * @return BookkeepingSetting
     */
    public function withReversedVatAccount(string $reversedVatAccount)
    {
        $new = clone $this;
        $new->reversedVatAccount = $reversedVatAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatAccountForVat25(): string
    {
        return $this->vatAccountForVat25;
    }

    /**
     * @param string $vatAccountForVat25
     *
     * @return BookkeepingSetting
     */
    public function withVatAccountForVat25(string $vatAccountForVat25)
    {
        $new = clone $this;
        $new->vatAccountForVat25 = $vatAccountForVat25;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatAccountForVat12(): string
    {
        return $this->vatAccountForVat12;
    }

    /**
     * @param string $vatAccountForVat12
     *
     * @return BookkeepingSetting
     */
    public function withVatAccountForVat12(string $vatAccountForVat12)
    {
        $new = clone $this;
        $new->vatAccountForVat12 = $vatAccountForVat12;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatAccountForVat6(): string
    {
        return $this->vatAccountForVat6;
    }

    /**
     * @param string $vatAccountForVat6
     *
     * @return BookkeepingSetting
     */
    public function withVatAccountForVat6(string $vatAccountForVat6)
    {
        $new = clone $this;
        $new->vatAccountForVat6 = $vatAccountForVat6;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountReceivableAccount(): string
    {
        return $this->accountReceivableAccount;
    }

    /**
     * @param string $accountReceivableAccount
     *
     * @return BookkeepingSetting
     */
    public function withAccountReceivableAccount(string $accountReceivableAccount)
    {
        $new = clone $this;
        $new->accountReceivableAccount = $accountReceivableAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getClientFundsAccount(): string
    {
        return $this->clientFundsAccount;
    }

    /**
     * @param string $clientFundsAccount
     *
     * @return BookkeepingSetting
     */
    public function withClientFundsAccount(string $clientFundsAccount)
    {
        $new = clone $this;
        $new->clientFundsAccount = $clientFundsAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getBankingAccount(): string
    {
        return $this->bankingAccount;
    }

    /**
     * @param string $bankingAccount
     *
     * @return BookkeepingSetting
     */
    public function withBankingAccount(string $bankingAccount)
    {
        $new = clone $this;
        $new->bankingAccount = $bankingAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getInterestFeeAccount(): string
    {
        return $this->interestFeeAccount;
    }

    /**
     * @param string $interestFeeAccount
     *
     * @return BookkeepingSetting
     */
    public function withInterestFeeAccount(string $interestFeeAccount)
    {
        $new = clone $this;
        $new->interestFeeAccount = $interestFeeAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getReminderFeeAccount(): string
    {
        return $this->reminderFeeAccount;
    }

    /**
     * @param string $reminderFeeAccount
     *
     * @return BookkeepingSetting
     */
    public function withReminderFeeAccount(string $reminderFeeAccount)
    {
        $new = clone $this;
        $new->reminderFeeAccount = $reminderFeeAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getRoundingAccount(): string
    {
        return $this->roundingAccount;
    }

    /**
     * @param string $roundingAccount
     *
     * @return BookkeepingSetting
     */
    public function withRoundingAccount(string $roundingAccount)
    {
        $new = clone $this;
        $new->roundingAccount = $roundingAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getFactoringReceivableAccount(): string
    {
        return $this->factoringReceivableAccount;
    }

    /**
     * @param string $factoringReceivableAccount
     *
     * @return BookkeepingSetting
     */
    public function withFactoringReceivableAccount(string $factoringReceivableAccount)
    {
        $new = clone $this;
        $new->factoringReceivableAccount = $factoringReceivableAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getNonAllocatedAccount(): string
    {
        return $this->nonAllocatedAccount;
    }

    /**
     * @param string $nonAllocatedAccount
     *
     * @return BookkeepingSetting
     */
    public function withNonAllocatedAccount(string $nonAllocatedAccount)
    {
        $new = clone $this;
        $new->nonAllocatedAccount = $nonAllocatedAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getIncomePayoutAccount(): string
    {
        return $this->incomePayoutAccount;
    }

    /**
     * @param string $incomePayoutAccount
     *
     * @return BookkeepingSetting
     */
    public function withIncomePayoutAccount(string $incomePayoutAccount)
    {
        $new = clone $this;
        $new->incomePayoutAccount = $incomePayoutAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getWrittenDownReceivablesAccount(): string
    {
        return $this->writtenDownReceivablesAccount;
    }

    /**
     * @param string $writtenDownReceivablesAccount
     *
     * @return BookkeepingSetting
     */
    public function withWrittenDownReceivablesAccount(string $writtenDownReceivablesAccount)
    {
        $new = clone $this;
        $new->writtenDownReceivablesAccount = $writtenDownReceivablesAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpectedLossAccount(): string
    {
        return $this->expectedLossAccount;
    }

    /**
     * @param string $expectedLossAccount
     *
     * @return BookkeepingSetting
     */
    public function withExpectedLossAccount(string $expectedLossAccount)
    {
        $new = clone $this;
        $new->expectedLossAccount = $expectedLossAccount;

        return $new;
    }

    /**
     * @return array
     */
    public function getRegionalSweden(): array
    {
        return $this->regionalSweden;
    }

    /**
     * @param array $regionalSweden
     *
     * @return BookkeepingSetting
     */
    public function withRegionalSweden(array $regionalSweden)
    {
        $new = clone $this;
        $new->regionalSweden = $regionalSweden;

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
        return null;
    }

    public function toArray()
    {
        $data = [];

        return $data;
    }
}
