<?php
include_once '../config/Database.php';
include_once '../controllers/TransactionController.php';
include_once '../controllers/ReportController.php';

$database = new Database();
$db = $database->getConnection();

$transactionController = new TransactionController();
$reportController = new ReportController();

// Exemplo de como lidar com requisições
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'createTransaction') {
        echo $transactionController->createTransaction($_POST['amount'], $_POST['category'], $_POST['date']);
    } elseif (isset($_POST['action']) && $_POST['action'] === 'createReport') {
        echo $reportController->createReport($_POST['goal'], $_POST['start_date'], $_POST['end_date']);
    }
}
?>
