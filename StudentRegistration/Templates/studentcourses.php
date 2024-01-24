<style>
   
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
    }
    
    .dashboard {
        display: flex;
        min-height: 100vh;
    }
    
    .sidebar {
        width: 250px;
        background-color: lightcoral;
        color: black;
        padding: 20px;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
    }
    
    .sidebar h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    
    .sidebar ul {
        list-style: none;
        padding: 0;
    }
    
    .sidebar li {
        margin-bottom: 10px;
    }
    
    .sidebar a {
        text-decoration: none;
        color: black;
        display: block;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    .sidebar a:hover {
        background-color: #555;
        color:white;
    }
    
    .main-content {
        flex: 1;
        padding: 40px;
    }
    
    .main-content h1 {
        margin-bottom: 20px;
        color: darkred;
        font-size: 36px;
    }
    
    .main-content p {
        color: #555;
        line-height: 1.6;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses-Student Portal</title>

</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="studenthome.php">Home</a></li>
                <li><a href="studentcourses.php">Courses</a></li>
                <li><a href="studentfees.php">Fee Structure</a></li>
                <br>
                <li><a href="studentlogin.php">Logout</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>Welcome to Your Student Portal!</h1>
       
               <h2>Courses</h2>
                <table>
                    <tr>
                        <th>Course_ID</th>
                        <th>Course</th>
                        <th>Department</th>
                    </tr>
                    
                    <?php
                    require_once "../Classes/Courses.php";                    
                    ?>

                </table>
            </div>
    </div>
</body>
</html>

