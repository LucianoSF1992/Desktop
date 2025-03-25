<?php
include_once 'config/Database.php';
include_once 'models/Report.php';


class ReportController {
    private $db;
    private $report;

    public function __construct() {
        $this->db = new Database();
        $this->report = new Report($this->db->getConnection());
    }

    public function createReport($goal, $start_date, $end_date) {
        $this->report->goal = $goal;
        $this->report->start_date = $start_date;
        $this->report->end_date = $end_date;

        if ($this->report->create()) {
            return json_encode(array("message" => "Report was created."));
        } else {
            return json_encode(array("message" => "Unable to create report."));
        }
    }
}
?>
