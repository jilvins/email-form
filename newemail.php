<?php
require('./classes/passesData.php');
session_start();

$product = new PassedData($_SESSION['session-data'], null);
$product->addNewEmail();