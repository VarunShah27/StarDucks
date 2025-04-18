<?php
include("connection.php");
    $sql="select * from feedback";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css" type="text/css">
    <title>Price list</title>
    <style>
       table{
    margin: 2rem auto;
  }
      </style>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
        <h2 class="back"><a href="index.html">Go back</a></h2>

            <h1>FEEDBACK</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">Favourite <br>drink</th>
                <th scope="col">Contact</th>
                <th scope="col">Views</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($result as $row){ ?>
                <td class="noBorder"><?=$row['id']?></td>
                <td class="noBorder"><?=$row['email']?></td>
                <td class="noBorder"><?=$row['name']?></td>
                <td class="noBorder"><?=$row['gender']?></td>
                <td class="noBorder"><?=$row['country']?></td>
                <td class="noBorder"><?=$row['fav']?></td>
                <td class="noBorder"><?=$row['contact']?></td>
                <td class="noBorder"><?=$row['views']?></td>
                 
                 
                    
              </tr>
                    <?php }?>
            </tbody>
          </table>
          <h2><a href="pricelist.php"> view price list</a></h2>
        </div>
      </div>
</body>
</html>