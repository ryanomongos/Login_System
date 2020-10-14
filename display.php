<!DOCTYPE html>
<html>
    <head>
        <title>Event Booking</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <h3><?php $_SESSION['name']?></h3>
            <button name="logout">logout</button>
            <?php
                if($_SESSION['user_type']=='admin'){
                    echo"<a href=\"event_form.php\"><button>Create Event</button></a>
                    <a href=\"user_form.php\"><button>Create User</button></a>";
                }
                echo"<a href=\"display.php\"><button>Display Events</button></a>";
                if($_SESSION['user_type']=='user'){
                    echo"<button>Booked Events</button>";
                }
            ?>
            
        </div>        
        <div class="container">
            <?php
                $conn = new mysqli('localhost', 'root', '', 'exercise_database');

                $result = $conn->query("SELECT * FROM events");

                while($row = $result->fetch_assoc()){
            ?>
            <div class="card">
                <div class="card-body">
                    <img src="<?php $row['event_image']?>">
                    <h5><?php $row['event_name']?></h5>
                
            <?php
                if($_SESSION['user_type']=='admin'){
            ?>
                <button name="update">Update</button>
                <button name="delete">Delete</button>
            <?php                       
                }else if($_SESSION['user_type']=='user'){
            ?>
                <button name="book">Book</button>";
            <?php
                }
                echo"                    
                    </div>
                </div>";
                }
            ?>        
    </body>
</html>