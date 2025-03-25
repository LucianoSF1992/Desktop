<?php
class Report {
    private $conn;
    private $table_name = "reports";

    public $id;
    public $goal;
    public $start_date;
    public $end_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET goal=:goal, start_date=:start_date, end_date=:end_date";
        $stmt = $this->conn->prepare($query);

        $this->goal = htmlspecialchars(strip_tags($this->goal));
        $this->start_date = htmlspecialchars(strip_tags($this->start_date));
        $this->end_date = htmlspecialchars(strip_tags($this->end_date));

        $stmt->bindParam(":goal", $this->goal);
        $stmt->bindParam(":start_date", $this->start_date);
        $stmt->bindParam(":end_date", $this->end_date);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
