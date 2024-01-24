<?php

require_once 'Database.php';

class login
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUser($username, $password)
    {
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
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
        header("location: Login.php");
    }
}