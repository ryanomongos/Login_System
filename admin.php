<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>        
        <div class="container">
            
            <h2>Customer Data</h2>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                <tr>
                <?php
                    $conn = new mysqli('localhost', 'root', '', 'activity1');

                    $result = $conn->query("SELECT user_type FROM user_accounts WHERE user_type == 'client'");

                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                                <td>".$row['name']."</td>
                                <td>".$row['username']."</td>
                                <td>".$row['password']."</td>
                            </tr>";
                    }
                ?>
            </table>            
        </div>
    </body>
</html>