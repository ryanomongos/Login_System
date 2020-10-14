<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
        <div class="container">
            <a href="event_form.php""><button>Create Event</button></a>
            <a href="#"><button>Create User</button></a>
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