<?php

class StudentRegistration
{
    private $servername = "localhost";
    private $username = "root";
    private $password_db = "";
    private $dbname = "studentregistration";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password_db, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertStudent($fname, $lname, $dob, $gender, $course, $yos, $password)
    {
        $sql = "INSERT INTO students (fname, lname, dob, gender, course, yos, password) 
                VALUES ('$fname', '$lname','$dob','$gender','$course','$yos','$password')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Registration was successful";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registration = new StudentRegistration();

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $yos = $_POST['yos'];
    $password = $_POST['password'];

    $registration->insertStudent($fname, $lname, $dob, $gender, $course, $yos, $password);

    $registration->closeConnection();
}
