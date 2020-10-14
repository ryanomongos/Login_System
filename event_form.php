<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
        <div class="container">
            <a href="#"><button>Create Event</button></a>
            <a href="user_form.php"><button>Create User</button></a>
            <div class="card">
                <div class="card-body">
                    <form action="event_form.php", method="POST">
                        <h5>Event Name</h5>
                        <input type="text" name="eventname" required><br />
                        <h5>Event Image</h5>
                        <input type="button" name="event_image" placeholder="Choose image" required><br /><br />
                        <button name="submit">Submit</button><br /><br />
                    </form>
                </div>
            </div>
            <?php
                 $conn = new mysqli('localhost', 'root', '', 'event_booking');

                 if(isset($_POST['submit'])){
                     $eventname = $_POST['eventname'];
                     $image = $_POST['event_image'];

                     $result = $conn->prepare("INSERT INTO events VALUES ('', ?, ?)");
                     $result->bind_param('ss', $eventname, $image);
                     $result->execute();
                 }
            ?>
            <a href="display.php"><button>Display Events</button></a>
        </div>
        
    </body>
</html>