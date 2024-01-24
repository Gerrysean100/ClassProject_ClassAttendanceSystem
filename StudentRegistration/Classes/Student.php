<?php
require_once 'Database4.php';
class Student extends DatabaseConnection
{
    public function getCoursesData()
    {
        $sql = "SELECT student_id, fname, lname, dob, gender, course, yos FROM students";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["student_id"] . "</td>
                        <td>" . $row["fname"] . "</td>
                        <td>" . $row["lname"] . "</td>
                        <td>" . $row["dob"] . "</td>
                        <td>" . $row["gender"] . "</td>
                        <td>" . $row["course"] . "</td>
                        <td>" . $row["yos"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }
    }
}

$dbConnection = new Student($servername, $username, $password, $dbname);
$dbConnection->connect();
$dbConnection->getCoursesData();
$dbConnection->closeConnection();

?>