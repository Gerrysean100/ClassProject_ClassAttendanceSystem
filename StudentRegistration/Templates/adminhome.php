<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home- Admin</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }      
        .dashboard {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-gap: 20px;
            padding: 20px;
        }
        
        .sidebar {
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #555;
        }
        
        .main-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #fff;
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
            color: #333;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .card a:hover {
            color: #555;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #444;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        
        @media screen and (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="adminhome.php">Home</a></li>
                <li><a href="student.php">Students</a></li>
                 <li><a href="courses.php">Courses</a></li>
                <li><a href="fees.php">Fees</a></li>
                <br>
                <li><a href="login.php">Logout</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="card">
                <h3><a href="register.php">Student Registration</a></h3>
                <p>Register New Students here.</p>
            </div>

            <div class="card">
                <h3><a href="student.php">Students</a></h3>
                <p>Display all Registered Students here.</p>
            </div>

            <div class="card">
                <h3><a href="courses.php">Courses</a></h3>
                <p>Display offered courses here.</p>
            </div>
            <div class="card">
                <h3><a href="fees.php">Fee Structure</a></h3>
                <p>See fixed fees per academic semester here.</p>
            </div>
            <div class="card">
                <h3><a href="#">Settings</a></h3>
                <p>Configure settings and options here.</p>
            </div>
            <div class="card">
                <h3><a href="login.php">Logout</a></h3>
                <p>Logout here.</p>
            </div>
        </div>
    </div>
</body>
</html>
