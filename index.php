<?php
   include 'database.php';
?>

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
            <h1>Landpage</h1>
            <p>CRUD System Assignment in App Dev</p>
            <a href = "create.php">Create</a>

            <ul class="list-group">
                <?php
                   
                    $conn = connectDB(); 
                    $result = $conn->query("SELECT * FROM products");

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                         echo "<li class='list-group-item'>" 
                         . $row["product_name"].
                         "<a href ='update.php'id = ".$row["product_id"]." class = 'pull-right'>Update</a>"
                         ."</li>";
                    }
                     } else {
                        echo "0 results";
                    }
                 $conn->close();

                ?>
            </ul>
        </div>
        
    </body>

    </html>