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
                    <form action="register.php", method="POST">
                        <h5>Name</h5>
                        <input type="text" name="name" required><br />
                        <h5>Username</h5>
                        <input type="text" name="username" required><br />
                        <h5>Password</h5>
                        <input type="password" name="password" required><br /><br />
                        <h5>Role</h5>
                        <input type="radio" name="role" value="admin"> Admin <br />
                        <input type="radio" name="role" value="client"> Client <br /><br />
                        <button name="submit">Submit</button><br /><br />
                    </form>
                    <?php
                        $conn = new mysqli('localhost', 'root', '', 'activity1');

                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $user_type = $_POST['role'];
                            $created_at = time();

                            $result = $conn->prepare("INSERT INTO user_accounts VALUES ('', ?, ?, ?, ?, $created_at)");
                            $result->bind_param('ssss', $name, $username, $password, $user_type);
                            $result->execute();
                        }
                    ?>
                <h7>If you account already</h7><br />
                <a href="login.php"><button>Login</button></a>
                </div>
              </div>
        </div>
    </body>
</html>