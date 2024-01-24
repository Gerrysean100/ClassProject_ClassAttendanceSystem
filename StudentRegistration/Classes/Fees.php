<?php
require_once 'Database4.php';
class Fees extends DatabaseConnection
{
    public function getCoursesData()
    {
        $sql = "SELECT unit_id, unit_name, fee FROM fees";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["unit_id"] . "</td>
                        <td>" . $row["unit_name"] . "</td>
                        <td>" . $row["fee"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
    }
}

$dbConnection = new Fees($servername, $username, $password, $dbname);
$dbConnection->connect();
$dbConnection->getCoursesData();
$dbConnection->closeConnection();

?>