<?php
include_once 'config/Database.php';
include_once 'controllers/TransactionController.php';


class TransactionControllerTest {
    private $transactionController;

    public function __construct() {
        $this->transactionController = new TransactionController();
    }

    public function testCreateTransaction() {
        // Teste de criação de transação
        $response = $this->transactionController->createTransaction(100, 'Alimentação', '2025-03-24');
        echo $response . "\n";
    }
}

// Executar o teste
$test = new TransactionControllerTest();
$test->testCreateTransaction();
?>
