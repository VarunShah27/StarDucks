<?php
include("connection.php");
    $sql="select * from price";
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
</head>
<body>
    <div class="container">
        <div class="table-responsive">
          <h2 class="back"><a href="admin.php">Go back</a></h2>

            <h1>Price list</h1>
            <div class="main">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach($result as $row){ ?>
                <td class="noBorder"><?=$row['id']?></td>
                <td class="noBorder"><?=$row['name']?></td>
                <td class="noBorder"><?=$row['price']?></td>
              </tr>
                    <?php }?>
            </tbody>
          </table>
             <form method="post" action="actions.php">
                <table>
                    <tr>
                        <th>Change prices</th>
                    <tr>
                    <td><input class="test" placeholder="id" name="id"></td>
                 </tr>
                 <tr>
                    <td>
                    <input class="number"placeholder="new price" name="price">
                </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="newprice">
                </td>
                </tr>
                <table>
                </form>
            </div>
        </div>
      </div>
</body>
</html>