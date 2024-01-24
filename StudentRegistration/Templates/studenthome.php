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
        color:black;
        display: block;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    .sidebar a:hover {
        background-color: #555;
        color: white;
    }
    
    .main-content {
        flex: 1;        
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .main-content h1 {
        margin-bottom: 20px;
        color: green;
        font-size: 36px;
    }
    
    .main-content p {
        color: white;
        line-height: 1.6;
    }
    .card {
        background-color: indianred;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .card a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        transition: color 0.3s ease;
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
    <title>Home-Student Portal</title>

</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="studentcourses.php">Courses</a></li>
                <li><a href="studentfees.php">Fee Structure</a></li>
                <br>
                <li><a href="studentlogin.php">Logout</a></li>
                <li><a href="#">Settings</a></li>
                
            </ul>
        </div>
        <div class="main-content">
            <div class="card">
                <h3><a href="#">Home</a></h3>
                <p>Register New Students here.</p>
            </div>

            <div class="card">
                <h3><a href="studentfees.php">Fee Structure</a></h3>
                <p>See fixed fees per academic semester here.</p>
            </div>
            <div class="card">
                <h3><a href="#">Settings</a></h3>
                <p>Configure settings and options here.</p>
            </div>
            <div class="card">
                <h3><a href="studentlogin.php">Logout</a></h3>
                <p>Logout here.</p>
            </div>
        </div>
</body>
</html>

