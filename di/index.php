<?php
require 'BankMain.php';
require 'BankMoney.php';
require 'SonaliBank.php';
require 'RupaliBank.php';
require 'JanataBank.php';

$sonali = new SonaliBank();
$x = new BankMain($sonali);
$x->getAccount();
