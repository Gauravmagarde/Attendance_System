<?php
include 'HeaderA.php';
include 'Connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    @media only screen and (min-width: 1279px) {
 .A {
    margin-top: 200px;
  }
}
  </style>
</head>

<body>
  <div class="container A">
  <div class="row" style="margin-top: 135px;">
    <div class="col-md-4">
      <img class="img-fluid rounded mx-auto d-block" src="Images/ft1.jpg">
    </div>
    <div class="col-md-4">
    <br>
    <div class="text-center">
      <h1 style="color: navy; font-family:ruby;">
        <i>Welcome Admin</i>
      </h1>
      <br><br>
      <h3 style="color: brown; font-family:ruby; float:center;">
        <b><u><i>
              Add Branch
            </i></u></b>
      </h3>
      <br><br>
      <form method="post">
        <input type="textbox" name="branch" style="width:170px; height:25px;" placeholder="Branch">
        <br><br><br>
        <input type="textbox" name="year" style="width:170px; height:25px;" placeholder="Year">
        <br><br><br>
        <button type="submit" name="submit" class="btn btn-primary" style="width: 150px; height:29px; background-color:navy; font-size:small; color: white; border-radius:10px; ">Add</button>
        <br><br><br>
        <?php
        if (isset($_POST['submit'])) {

          $branch = $_POST['branch'];
          $year = $_POST['year'];
          $query_one = "select * from branch where year='$year' && branchd='$branch' ";
          $data_one = mysqli_query($conn, $query_one);

          if (mysqli_num_rows($data_one) == 1) {
            echo " Data already inserted";
          } else {
            $sql_one = "insert into branch (branchd , year) values ('$branch','$year')";

            if (mysqli_query($conn, $sql_one)) {
              echo "Data enter Successfully";
            } else {
              echo "Data Not Insert";
            }
          }
        }
        ?>
      </form>
      </div>
    </div>
    <div class="col-md-4">
      <img class="img-fluid rounded mx-auto d-block" src="Images/ft2.png">
    </div>
  </div>
  </div>
  <br><br>
  <?php
  include "footer.php";
  ?>
</body>

</html>