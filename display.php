<!DOCTYPE html>
<html>
    <head>
        <title>Event Booking</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
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
                if($person['user_type']=='admin'){
            ?>
                <button>Update</button>
                <button name="delete">Delete</button>
            <?php
                    if(isset($_POST['delete'])){
                        $del = $conn->query("DELETE FROM events WHERE event_id = $row['event_id']");
                    }    
                }else if($person['user_type']=='user'){
                    echo"<button>Book</button>";
                }
                echo"                    
                    </div>
                </div>";
                }
            ?>        
    </body>
</html>