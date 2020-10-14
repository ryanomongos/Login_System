<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                    <button></button>
                </div>
            </div>
            <?php
                }
            ?>        
    </body>
</html>