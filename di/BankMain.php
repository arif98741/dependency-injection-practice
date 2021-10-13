<?php


class BankMain
{
    private $bankMoney;

    /**
     * @param BankMoney $bankMoney
     */
    public function __construct(BankMoney $bankMoney)
    {
        $this->bankMoney = $bankMoney;
    }

    public function getAccount()
    {
        $this->bankMoney->getAccount();
    }
}