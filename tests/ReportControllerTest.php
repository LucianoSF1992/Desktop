<?php
include_once 'config/Database.php';
include_once 'controllers/ReportController.php';


class ReportControllerTest {
    private $reportController;

    public function __construct() {
        $this->reportController = new ReportController();
    }

    public function testCreateReport() {
        // Teste de criação de relatório
        $response = $this->reportController->createReport('Meta de Economia', '2025-01-01', '2025-12-31');
        echo $response . "\n";
    }
}

// Executar o teste
$test = new ReportControllerTest();
$test->testCreateReport();
?>
