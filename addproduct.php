<?php
include_once("functions.php");
$add = new addProduct;
$add->select();
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
      <form action="" method="post" id="product_form">

        <div class="row border-bottom w-100">
          <h1 class="col-6">Add Product</h1>
          <div class="col-6 text-end">
            <input type="submit" name="save" class="btn btn-primary" value="Save">
            <a href="index.php" class="btn bg-body-secondary">Cancel</a>
          </div>
        </div>

        <div class="main mt-3">
          <div class="row input-group mb-3 w-50">
            <label class="col-3">Sku</label>
            <input type="text" name="sku" class="form-control" id="sku" required>
          </div>
          <div class="row input-group mb-3 w-50">
            <label class="col-3">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="row input-group mb-3 w-50">
            <label class="col-3">Price</label>
            <input type="number" name="price" class="form-control" id="price" required>
          </div>
          <div class="input-group mb-3 w-50">
            <label class="col-3">Type Switcher</label>
            <select class="form-select" name="productType" id="productType" required>
              <option value="" hidden></option>
              <option value="dvd">DVD Disk</option>
              <option value="book">Book</option>
              <option value="furn">Furniture</option>
            </select>
          </div>

          <div class="hid" id="size">
            <div class="input-group mb-3 w-50">
              <label class="col-3">Size</label>
              <input type="number" name="size" class="form-control" required>
            </div>
            <h5 class="text-center w-50">Please, Provide Size In MB.</h5>
          </div>

          <div class="hid" id="weight">
            <div class="input-group mb-3 w-50">
              <label class="col-3">Weight</label>
              <input type="number" name="weight" class="form-control" required>
            </div>
            <h5 class="text-center w-50">Please, Provide Weight In KG.</h5>
          </div>

          <div class="hid" id="Furniture">
            <div>
              <div class="input-group mb-3 w-50" id="height">
                <label class="col-3">Height</label>
                <input type="number" name="height" class="form-control" required>
              </div>
              <div class="input-group mb-3 w-50" id="width">
                <label class="col-3">Width</label>
                <input type="number" name="width" class="form-control" required>
              </div>
              <div class="input-group mb-3 w-50" id="length">
                <label class="col-3">Length</label>
                <input type="number" name="length" class="form-control" required>
              </div>
            </div>
            <h5 class="text-center w-50">Please, Provide Dimensions</h5>
          </div>

        </div>

      </form>
    </div>



    <!-- Jquery Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Js Links -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
  </body>
</html>