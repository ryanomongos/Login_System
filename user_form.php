<!DOCTYPE html>
<html>
    <head>
        <title>User Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>    
    <div class="container">
            <h3><?php $_SESSION['name']?></h3>
            <button name="logout">logout</button>
            <?php
                if($_SESSION['user_type']=='admin'){
            ?>
                <button name="event">Create Event</button></a>
                <button name="user_form">Create User</button></a>
            <?php
                }
                if(isset($_POST['event'])){
                    include "event_form.php";
                }else if(isset($_POST['user_form'])){
                    include "user_form.php";
                }

                echo"<a href=\"display.php\"><button>Display Events</button></a>";
                if($_SESSION['user_type']=='user'){
                    echo"<button>Booked Events</button>";
                }
            ?>
            
        </div>    
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="register.php", method="POST">
                        <h5>Name</h5>
                        <input type="text" name="name" required><br />
                        <h5>Email</h5>
                        <input type="email" name="email" required><br />
                        <h5>Username</h5>
                        <input type="text" name="username" required><br />
                        <h5>Password</h5>
                        <input type="password" name="password" required><br /><br />
                        <button name="submit">Submit</button><br /><br />
                    </form>
                    <?php
                        $conn = new mysqli('localhost', 'root', '', 'event_booking');

                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $result = $conn->prepare("INSERT INTO users_detail VALUES ('', ?, ?, ?, ?, 'user')");
                            $result->bind_param('ssss', $username, $password, $name, $email);
                            $result->execute();
                        }
                    ?>
                </div>
            </div><br />
            <a href="display.php"><button>Display Events</button></a>
        </div>
    </body>
</html>