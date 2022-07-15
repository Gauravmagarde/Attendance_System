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
                margin-top: 170px;
            }
        }
    </style>
</head>

<body>
    <div class="container A">
        <div class="row" style="margin-top: 125px;">
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/addstu.jpg">
            </div>
            <div class="col-md-4 text-center">
                <div class="row" style="margin-top:30px;">
                    <div class="col-md-6">
                        <div>
                            <img src="Images/student7.jpg" style=" margin-left:5px; width: 100px; height: 100px ; border-radius: 50%;">
                            <h3 style="font-family: ruby; color: navy">
                                <b><u><i>ADD STUDENT</i></u></b>
                            </h3>
                        </div>
                        <div>
                            <form method="post" enctype="multipart/form-data">
                                <input style="width: 170px; height:27px;" type="textbox" name="sid" placeholder="student id" required><br><br>
                                <input style="width: 170px; height:27px;" type="textbox" name="sname" placeholder="student name" required><br><br>
                                <input type="radio" style=" margin-left:35px;" name="gender" value="male">
                                <label for="male">Male</label>
                                <input type="radio" style=" margin-left:35px;" name="gender" value="female">
                                <label for="female">Female</label>
                                <br>
                                <select style="width: 170px; height:27px;" name="branch" id="input" required>
                                    <option id="input" selected disabled>
                                        PLEASE SELECT BRANCH...
                                    </option>
                                    <?php
                                    $query_one = "SELECT branchd from branch";
                                    $record = mysqli_query($conn, $query_one);
                                    while ($row = mysqli_fetch_array($record)) {
                                        echo "<option value='" . $row['branchd'] . "'>" . $row['branchd'] . "</option>";
                                    }
                                    ?>
                                </select><br>
                                <br>
                                <select style="width: 170px; height:27px;" name="year" id="input" required>
                                    <option id="input" selected disabled>
                                        PLEASE SELECT YEAR...
                                    </option>
                                    <?php
                                    $query_two = "SELECT year from branch";
                                    $record_one = mysqli_query($conn, $query_two);
                                    while ($row = mysqli_fetch_array($record_one)) {
                                        echo "<option value='" . $row['year'] . "'>" . $row['year'] . "</option>";
                                    }
                                    ?>
                                </select><br><br>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <input style="width: 170px; height:27px;" type="textarea" name="address" placeholder="address" required><br><br>
                        <input style="width: 170px; height:27px;" type="number" name="pnumber" placeholder="parent number" required><br><br>
                        <input style="width: 170px; height:27px;" type="email" name="pemail" placeholder="parent email id" required><br><br>
                        <input style="width: 170px; height:27px;" type="textbox" name="username" placeholder="username" required><br><br>
                        <input style="width: 170px; height:27px;" type="password" name="password" placeholder="password" required><br><br>
                        <input style="width: 170px; height:27px;" type="file" name="uploadfile" required><br><br>
                        <button type="submit" name="submit" style="width: 150px; height:29px; background-color:navy; font-size:small;"  class="btn btn-primary"> add</button>
                    </div>
                </div>
                <br>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $sid = $_POST['sid'];
                    $sname = $_POST['sname'];
                    $gender = $_POST['gender'];
                    $branch = $_POST['branch'];
                    $year = $_POST['year'];
                    $address = $_POST['address'];
                    $pnumber = $_POST['pnumber'];
                    $pemail = $_POST['pemail'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $filename = $_FILES["uploadfile"]["name"];
                    $tempname = $_FILES["uploadfile"]["tmp_name"];
                    $folder = "Images/ " . $filename;
                    move_uploaded_file($tempname, $folder);
                    $query = "insert into studentinfo (sid,sname,gender,branchd,year,address,contact,email,username,password,image) values ('$sid','$sname','$gender','$branch','$year','$address','$pnumber','$pemail','$username','$password','$folder')";
                    $result = mysqli_query($conn, $query);

                    $_my_clicksend_username = "gayatrikadhao@pskitservices.com";
                    $_my_clicksend_key = "B11EE99D-83B8-36BA-132D-AB8A0497B614";
                    //You MUST define the 'to', 'message' and 'senderid'
                    $to        = $pnumber;
                    $message   = "Student Id: " . $sid . "<br>Student Name:" . $sname . " <br>username " . $username . "<br> password " . $password;
                    $senderid  = "XYZ";
                    $message = urlencode($message);
                    $to = urlencode($to);
                    $vars = "method=http&username=$_my_clicksend_username&key=$_my_clicksend_key&to=+91" . $to . "&message=" . $message . "&senderid=" . $senderid;
                    file_get_contents('https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=gayatrikadhao@pskitservices.com&key=B11EE99D-83B8-36BA-132D-AB8A0497B614&to=+91' . $to . '&message=' . $message . '&senderid=XYZ');
                    echo "data enter successfully.";
                } 

                ?>
            </div>
            <div class="col-md-4" style="margin-top:25px;">
                <img src="Images/addst.jpg" class="img-fluid rounded mx-auto d-block" >
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>