<?php
require_once 'Database4.php';

class Courses extends DatabaseConnection
{
    public function getCoursesData()
    {
        $this->connect();
        $sql = "SELECT course_id, course_name, Department FROM courses";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["course_id"] . "</td>
                        <td>" . $row["course_name"] . "</td>
                        <td>" . $row["Department"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }

        $this->closeConnection();
    }
}


$courseDBConnection = new Courses($servername, $username, $password, $dbname);
$courseDBConnection->getCoursesData();
