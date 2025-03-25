<?php
include_once 'config/Database.php';
include_once 'models/Transaction.php';

class TransactionController {
    private $db;
    private $transaction;

    public function __construct() {
        $this->db = new Database();
        $this->transaction = new Transaction($this->db->getConnection());
    }

    public function createTransaction($amount, $category, $date) {
        $this->transaction->amount = $amount;
        $this->transaction->category = $category;
        $this->transaction->date = $date;

        if ($this->transaction->create()) {
            return json_encode(array("message" => "Transaction was created."));
        } else {
            return json_encode(array("message" => "Unable to create transaction."));
        }
    }
}
?>
