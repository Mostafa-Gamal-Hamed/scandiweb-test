<?php
include_once("functions.php");
error_reporting(0);
$list = new productList;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css Links -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Product</title>
  </head>
  <body>
    <div class="container mt-3">

      <form action="" method="post">
        <div class="row border-bottom w-100">
          <h1 class="col-6">Product List</h1>
          <div class="col-6 text-end">
            <a href="addproduct.php" class="btn bg-body-secondary">Add</a>
              <input type="submit" name="delete" class="btn btn-danger" value="MASS DELETE">
          </div>
        </div>

        <div class="row">
            <?php echo $list->show(); ?>
            <?php echo $list->delete_product(); ?>
        </div>
      </form>

    </div>


    <!-- Js Links -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Jquery Link -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  </body>
</html>