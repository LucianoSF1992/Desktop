<?php
include_once 'TransactionControllerTest.php';
include_once 'ReportControllerTest.php';

// Executar todos os testes
$transactionTest = new TransactionControllerTest();
$transactionTest->testCreateTransaction();

$reportTest = new ReportControllerTest();
$reportTest->testCreateReport();
?>
