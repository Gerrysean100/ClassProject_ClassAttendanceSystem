<?php

require_once 'Database.php';

class StudentLogin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUser($student_id, $password)
    {
        $sql = "SELECT * FROM students WHERE student_id='$student_id' AND password='$password'";
        $result = $this->db->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        header("location: StudentLogin.php");
    }
}