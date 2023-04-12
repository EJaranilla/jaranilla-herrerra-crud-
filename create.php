<?php
   include 'database.php';
?>
 <?php
        if(isset($_POST["productname"]) 
        && isset($_POST["productdescription"])
        && isset($_POST["productstocks"]))
        {
           $name = $_POST["productname"];
           $description = $_POST["productdescription"];
           $stocks = $_POST["productstocks"];

           $conn = connectDB();
            $sql = "INSERT INTO products (product_name, product_description, stocks)
            VALUES ('".$name."', '".$description."', '".$stocks."')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } 
            else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
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
            <h1>Create</h1>
            

            <form method = "POST" action = "create.php">
                <label>Product Name</label><br>
                <input type = "text" name="productname" required><br><br>

                <label>Description</label><br>
                <input type = "text" name="productdescription" required><br><br>

                <label>Stocks</label><br>
                <input type = "number" name="productstocks" required><br><br>

                <input type = "submit" class = "btn btn-success" value = "Submit">
                 <a href = "index.php" class = "btn btn-danger">Cancel</a>
            </form>

        </div>
   
        
    </body>

    </html>