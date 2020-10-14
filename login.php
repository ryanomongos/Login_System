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
                        <button name="submit">Submit</button><br /><br />
                    </form>
                </div>
            </div>
            <?php
                 $conn = new mysqli('localhost', 'root', '', 'event_booking');

                 if(isset($_POST['submit'])){
                     $username = $_POST['username'];
                     $password = $_POST['password'];

                     $result = $conn->prepare("INSERT INTO users_detail VALUES ('', ?, ?, ?, ?, ?)");
                     $result->bind_param('sssss', $username, $password, $name, $email, $user_type);
                     $result->execute();
                 }
            ?>
        </div>
    </body>
</html>