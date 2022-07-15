<?php
session_start();
include "HeaderA.php";
include "Connection.php";
$userprofile = $_SESSION['sid'];
$query = "SELECT * from studentinfo where sid='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
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
        <div class="row" style="margin-top:125px;">
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/ar.png">
            </div>
            <div class="col-md-4">
                <h1 style="font-family: ruby; color: navy;">
                    <b><u><i>View All Student Arrival Detail</i></u></b>
                </h1>
                <br><br>
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6" style="color: brown;">
                            <h3><b> Start Date</b></h3><br>
                            <input type="Date" name="intime" style="width:160px; height:29px; border-radius: 10px;">
                        </div>
                        <div class="col-md-6" style="color: brown;">
                            <h3><b> End Date</b></h3><br>
                            <input type="Date" name="outtime" style="width:160px; height:29px; border-radius: 10px;">
                        </div>
                        <br>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <input type="submit" value="search" class="btn btn-primary" name="submit" style="width: 150px; height:29px; background-color:navy; font-size:small;">
                    </div>
            </div><br><br>
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/arr.png">
            </div>
        </div>
        <div class="contianer" style="overflow-x:auto;">
            <table border="3px" style="border-color:navy; margin-left:152px;" cellpadding="20px" width="1400px">

                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST['intime']) and empty($_POST['outtime'])) {
                        echo '<script>alert("Empty")</script>';
                    } else {
                        $intime1 = $_POST['intime'];
                        $outtime1 = $_POST['outtime'];
                        $sql = "SELECT * from arrival where date between '$intime1' and '$outtime1'  ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                ?>
                            <tr align="center" style="color: #800000; font-family:ruby; background: lightblue;">
                                <th> <u><b><i>
                                                <h4>Sid</h4>
                                            </i></b></u></th>
                                <th> <u><b><i>
                                                <h4>Name</h4>
                                            </i></b></u></th>
                                <th> <u><b><i>
                                                <h4>Contact</h4>
                                            </i></b></u></th>
                                <th> <u><b><i>
                                                <h4>Date</h4>
                                            </i></b></u></th>
                                <th> <u><b><i>
                                                <h4>Intime</h4>
                                            </i></b></u></th>
                                <th> <u><b><i>
                                                <h4>Outime</h4>
                                            </i></b></u></th>
                            </tr>


                <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr><td>" . $row['sid'] . "</td>";
                                echo "<td>" . $row['sname'] . "</td>";
                                echo "<td>" . $row['contact'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['intime'] . "</td>";
                                echo "<td>" . $row['outtime'] . "</td>";
                                echo "</tr>";
                                echo "</form>";
                            }
                        } else {
                            echo '<script>alert("Invalid INTIME AND OUTTIME")</script>';
                        }
                    }
                }
                ?>
        </div>
        </form>
        </table>
    </div>
    </div>
    <br><br>
    <?php
    include "Footer.php";
    ?>
</body>

</html>