<?php
class Transaction {
    private $conn;
    private $table_name = "transactions";

    public $id;
    public $amount;
    public $category;
    public $date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET amount=:amount, category=:category, date=:date";
        $stmt = $this->conn->prepare($query);

        $this->amount = htmlspecialchars(strip_tags($this->amount));
        $this->category = htmlspecialchars(strip_tags($this->category));
        $this->date = htmlspecialchars(strip_tags($this->date));

        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":category", $this->category);
        $stmt->bindParam(":date", $this->date);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
