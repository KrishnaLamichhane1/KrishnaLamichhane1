<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Krishna contact Application</title>
</head> 
<body>
    <h1>Krishna Contact App</h1>
    <h2>Update contact</h2>
    <?php

    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM names WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $contactname = $row['name'];
        $contactphone = $row['phone'];
    }

 


    ?>
    <form action="editaction.php" method="post">
    <div class="main">
    <label for="name">Name:</label><br><br>
    <input type="text" name="name" id="name" value ="<?php global $contactname;echo $contactname ?>" required><br><br>
    <label for="contact">Contact:</label><br><br>
    <input type="number" name="contact" id="contact" value ="<?php global $contactphone;echo $contactphone ?>" required><br><br>
    <input type="hidden" name="id" id="id" value ="<?php global $id; echo $id ?>" required><br>
    <input type="submit" value="Update"><br><br>
    </div>
    </form>
    
</body>
</html>