<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }
    
    .bg-image {
        background-image: url('../Public/images/students11.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh; 
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .content {
        text-align: center;
        color: orange;
    }
    
    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }
    
    .buttons {
        display: flex;
        justify-content: center;
    }
    
    .btn {
        padding: 10px 20px;
        margin: 0 10px;
        text-decoration: none;
        color: white;
        background-color: darkred;
        border: 1px solid #333;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    
    .btn:hover {
        background-color: red;
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);        
    }
    
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page- Student Registration System</title>
   
</head>
<body>
    <div class="bg-image">
        <div class="content">
            <h1>Welcome to Our Student Registration System</h1>
            <div class="buttons">
                <a href="login.php" class="btn">Admin Login</a>
                <a href="studentlogin.php" class="btn">Student Sign In</a>
                <a href="register.php" class="btn">Student Sign Up</a>
                            
            </div>
        </div>
    </div>
</body>
</html>
