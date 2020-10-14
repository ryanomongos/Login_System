<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="", method="POST">
                        <h5>Username</h5>
                        <input type="text" name="username" required><br />
                        <h5>Password</h5>
                        <input type="text" name="password" required><br /><br />
                        <button name="login">Submit</button><br /><br />
                    </form>
                </div>
            </div>
            <?php
                 $conn = new mysqli('localhost', 'root', '', 'event_booking');

                if(isset($_POST['login'])){
                     $username = $_POST['username'];
                     $password = $_POST['password'];

                    $result = $conn->query("SELECT * FROM users_detail WHERE username = '$username' AND password = '$passwordd'");
                    if($row = $result->fetch_assoc()){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['user_type'] = $row['user_type'];
                    }                    
                }

                if($_SESSION['user_type']==='Admin'){
                    include "display.php";
                }else if($_SESSION['user_type']==='User'){
                    include "display.php";
                }

                if(isset($_POST['logout'])){
                    session_destroy();

                    header("Location: login.php");
                }
            ?>
        </div>
    </body>
</html>