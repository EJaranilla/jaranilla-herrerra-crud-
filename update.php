<?php
   include 'database.php';
?>
<?php

$conn = connectDB(); 
$id = intval($_GET["id"]);
$result = $conn->query("SELECT * FROM products where product_id = ". $id);

$productname_ = "";
$productdescription_  = "";
$productstocks_ = "";

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $productname_ = $row["product_name"];
        $productdescription_ = $row["product_description"];
        $productstocks_ = $row["stocks"];
    }
    } else {
        echo "0 results";
    }
    $conn->close();

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
            <h1>Update</h1>
            

            <form method = "POST" action = "update-process.php">
                <label>Product Name</label><br>
                <input type = "text" name="productname" 
                value = "<?Php echo $productname_; ?>" required><br><br>

                <label>Description</label><br>
                <input type = "text" name="productdescription"  
                value = "<?Php echo $productdescription_;?>" required><br><br>

                <label>Stocks</label><br>
                <input type = "number" name="productstocks"  
                value = "<?Php echo $productstocks_; ?>" required><br><br>

                <input type = "submit" class = "btn btn-primary" value = "Submit">
                 <a href = "index.php" class = "btn btn-danger">Cancel</a>

            </form>

        </div>
   
        
    </body>

    </html>