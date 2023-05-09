<?php
$conn = mysqli_connect('','','',''); if(!$conn){echo "Not Connected";}

abstract class makeProduct{
  public  $sku   ="";
  public  $name  ="";
  public  $price ="";
  public  $type  ="";
  public $size   ="";
  public $weight ="";
  public $height ="";
  public $width  ="";
  public $length ="";

  abstract public function select();
  abstract public function check($s,$n,$p,$t,$i,$w,$h,$d,$l);
  abstract public function store($s,$n,$p,$t,$i,$w,$h,$d,$l);
}

class addProduct extends makeProduct{
  public function select() {
    if(isset($_POST['save'])) {
      $sku   = $_POST['sku'];   $type   = $_POST['productType']; $height = $_POST['height'];
      $name  = $_POST['name'];  $size   = $_POST['size'];        $width  = $_POST['width'];
      $price = $_POST['price']; $weight = $_POST['weight'];      $length = $_POST['length'];
      $this->check($sku,$name,$price,$type,$size,$weight,$height,$width,$length);
    }
  }
  public function check($sku,$name,$price,$type,$size,$weight,$height,$width,$length) {
    global $conn;
    $select = "SELECT * FROM `scandiweb_test` WHERE `sku` = '$sku'";
    $result = mysqli_query($conn,$select);
    $row    = mysqli_num_rows($result);
    if($row > 0) {
      echo "<script>alert('The SKU Is Exist')</script>";
    }else{
      $this->store($sku,$name,$price,$type,$size,$weight,$height,$width,$length);
      header("location:index.php");
    }
  }
  public function store($sku,$name,$price,$type,$size,$weight,$height,$width,$length) {
    global $conn;
    $insert = "INSERT INTO `scandiweb_test` (`sku`,`name`,`price`,`type_switcher`,`size`,`weight`,`height`,`width`,`length`)
    VALUES('$sku','$name','$price','$type','$size','$weight','$height','$width','$length')";
    mysqli_query($conn,$insert);
  }

};

class productList{
  public function show() {
    global $conn;
    $select = "SELECT * FROM `scandiweb_test`";
    $result = mysqli_query($conn,$select);
    while($row = mysqli_fetch_assoc($result)) {
      $fetch_id     = $row["id"];
      $fetch_sku    = $row["sku"];
      $fetch_name   = $row["name"];
      $fetch_price  = $row["price"];
      $fetch_size   = $row["size"];
      $fetch_weight = $row["weight"];
      $fetch_height = $row["height"];
      $fetch_width  = $row["width"];
      $fetch_length = $row["length"];
      ?>
        <div class='show_product m-5 border border-black'>
          <div class='text-center mt-4'>
            <input class='form-check-input delete-checkbox' name='check[]' type='checkbox' value='<?php echo $fetch_id ?>'>
            <p><?php echo $fetch_sku ?></p>
            <p><?php echo $fetch_name ?></p>
            <p>$<?php echo $fetch_price ?></p>
            <?php
              if($fetch_size > 0) {
              echo "<p>Size:$fetch_size MB</p>";
              }
              if($fetch_weight > 0){
                echo "<p>Weight:$fetch_weight KG</p>";
              }
              if($fetch_height > 0 && $fetch_width > 0 && $fetch_length > 0 ){
                echo "<p>Dimensions:$fetch_height x $fetch_width x $fetch_length</p>";
              }
            ?>
          </div>
        </div>
      <?php
    }
  }

  public function delete_product() {
    global $conn;
    if(isset($_POST['delete'])) {
      foreach($_POST["check"] as $del) {
        $delete = "DELETE FROM `scandiweb_test` WHERE `id` = '$del' ";
        $r = mysqli_query($conn,$delete);
        if($r) {
          header("location:index.php");
        }else{
          echo "<script>alert('Not Deleted')</script>";
        }
      }
    }
  }

}