<!DOCTYPE html>

<?php
if (isset($_POST['authors'])){
   $country=$_POST['Itisit'];
    echo "This is it". $country;
  }
?>


<html>
  <head>
      <title>All Datas</title>
  </head>
  <body>
    <div class="form-group">
    <label for="authors">Airlines</label>
    <!-- <noscript> -->

    <select method="post"class="form-control" id="authors" name="authors"  action="index.php">
      <option selected="" disabled="">Select Author</option>
      <?php
        require 'data.php';
        $airlines = loadAuthors();
        foreach ($airlines as $airline) {
          echo "<option name='"."Itisit"."' value='".$airline['AIRLINE']."'>".$airline['AIRLINE']."</option>";
        }
         echo "<script>console.log('" . $_GET['authors'] . "');</script>";
       ?>
    </select>
  <!-- </noscript> -->

    <input type="Submit" value="save" action="index.php">

      <select class="form-control" id="cu" name="cu">
      <option selected="" disabled="">Select Author</option>
      <?php
         require 'data.php';
         $airlines1 = getDelay();
         foreach ($airlines1 as $airline) {
           echo "<option id='".$airline['AIRLINE']."' value='".$airline['AIRLINE']."'>".$airline['AIRLINE']."</option>";
         }
         $country=$_POST['authors'];
         echo "<script>console.log('" . $_GET['authors'] . "');</script>";
       ?>
    </select> -->


  </div>
  </body>

</html>
