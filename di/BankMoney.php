<?php

/**
 * --------------------------------------------------------------------------------
 * interface is a class structure that contains method for its follower classes.
 * it's a roadmap of classes
 * -------------------------------------------------------------------------------
 */
interface BankMoney
{
    public function getAccount();

    public function freezeAccount();

    public function transferBalance();

    public function getDetails();
}