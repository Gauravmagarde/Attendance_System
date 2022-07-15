<?php
include "HeaderA.php";
include "Connection.php";
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
    <div class="container A text-center">
        <form method="POST">
            <div class="row" style="margin-top:125px;">
                <div class="col-sm-4">
                    <img class="img-fluid rounded mx-auto d-block" src="Images/leaa.jpg">
                </div>
                <div class="col-sm-4">
                    <br>
                    <div>
                        <h1 style="font-family: ruby; color: navy;">
                            <b><u><i>Write Letter For Leave</i></u></b>
                    </div>
                    <br>
                    <br>
                    <div class="row text-center">
                        <div class="col-md-6" style="color: brown;">
                            <h3><b> Start Date</b></h3><br>
                            <input type="Date" style="width:160px; height:29px; border-radius:10px;" name="sdate" id="input">
                        </div>
                        <div class="col-md-6" style="color: brown;">
                            <h3><b> End Date</b></h3><br>
                            <input type="Date" style="width:160px; height:29px; border-radius:10px;" name="edate" id="input">
                        </div>
                    </div><br><br>
                    <div>
                        <input type="submit" value="search" class="btn btn-primary" style="width: 150px; height:29px; background-color:navy; font-size:small;" name="submit">
                    </div>
                </div><br><br>
                <div class="col-md-4">
                    <img class="img-fluid rounded mx-auto d-block" src="Images/leav.png">
                </div>
            </div><br><br>
        </form><br><br>
        <?php
        if (isset($_POST['submit'])) {
            //$sid=$_SESSION['sid'];  
            if (empty($_POST['sdate']) and empty($_POST['edate'])) {
                echo '<script>alert("Empty")</script>';
            } else {
                $sdate1 = $_POST['sdate'];
                $edate1 = $_POST['edate'];
                $sql = "SELECT * from details where (sdate<='$sdate1' and  edate>='$edate1') or (sdate>='$sdate1' and  edate<='$edate1') ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
        ?>
                    <div style="overflow-x:auto;text-align: center;">
                        <form method='post' enctype='multipart/form-data'>
                            <table border="3px" style="border-color:navy; margin-left:152px;" cellpadding="20px" width="1400px">
                                <tr align="center" style="color: #800000; font-family:ruby; background: lightblue;">
                                    <th> <u><b><i>
                                                    <h4>Sid</h4>
                                                </i></b></u></th>
                                    <!-- <th> <u><b><i> -->
                                    <!-- <h4>Image</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Name</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Email</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Gender</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Branchd</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Year</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Contact</h4>
                                                </i></b></u></th> -->
                                    <th> <u><b><i>
                                                    <h4>Date</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Intime</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Outime</h4>
                                                </i></b></u></th>
                                    <th> <u><b><i>
                                                    <h4>Details</h4>
                                                </i></b></u></th>
                                </tr>
                                <tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $gau = $row['sid'];
                            $sql2 = "SELECT * FROM studentinfo where sid='$gau'";
                            $result11 = mysqli_query($conn, $sql2);
                            $row1 = mysqli_fetch_array($result11);
                            echo " <form method='post' enctype='multipart/form-data' >";
                            echo "<td>" . $row['sid'] . "</td>";
                            // echo "<td><img src='" . $row1['image'] . "' width=100px height=100px ></td>";
                            // echo "<td>" . $row1['sname'] . "</td>";
                            // echo "<td>" . $row1['email'] . "</td>";
                            // echo "<td>" . $row1['gender'] . "</td>";
                            // echo "<td>" . $row1['branchd'] . "</td>";
                            // echo "<td>" . $row1['year'] . "</td>";
                            // echo "<td>" . $row1['contact'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['sdate'] . "</td>";
                            echo "<td>" . $row['edate'] . "</td>";
                            echo "<td>" . $row['detail'] . "</td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                    }
                }
                echo "</table>";
            }
                        ?>
                    </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>