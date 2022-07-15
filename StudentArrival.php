<?php
session_start();
include "HeaderP.php";
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
    <link rel="stylesheet" href="CSS/ParentDash.css">
</head>

<body>
    <div class="container" style="margin-top:125px;">
        <h1 class="text-center mt-4 mb-3" style="font-family:ruby; color:navy;">
            <b><u><i>View Student Arrival Detail</i></u></b>
        </h1>
        <br><br>
        <div class="row">
            <div class="col-md-4 mb-5">
                <img class="img-fluid rounded mx-auto d-block" src="Images/rfid6.jpg">
            </div>
            <div class="col-md-4 text-center">
                <form method="POST">
                    <div>
                        <div>
                            <h2 style="font-family: new Times roman;"><i><b> Start Date</b></i></h2><br>
                            <input type="Date" name="intime" Style="width:200px; height:30px;">
                        </div>
                        <br>
                        <div>
                            <h2 style="font-family: new Times roman;"><i><b> End Date</b></i></h2>
                            <br><input type="Date" name="outtime" Style="width:200px; height:30px;">
                        </div>
                    </div><br><br><br>
                    <div>
                        <input type="submit" class="btn btn-primary" style="width: 150px; height:29px; background-color:navy; font-size:small;" value="search" name="submit">
                    </div>
            </div>
            </form>
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/student1.jpg">
            </div>
        </div>
    </div>
    <div class="contianer" style="overflow-x:auto;">
        <table border="3px" style="border-color:navy; margin-left:152px;" cellpadding="20px" width="1400px">
            <?php
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if (isset($_POST['submit'])) {
                if (empty($_POST['intime']) and empty($_POST['outtime'])) {
                    echo '<script>alert("Empty")</script>';
                } else {
                    $intime1 = $_POST['intime'];
                    $outtime1 = $_POST['outtime'];
                    $sql = "SELECT * from arrival where sid = '$userprofile' and  date between '$intime1' and '$outtime1'  ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
            ?>
                        <tr align="center" style="color: #800000; background: lightblue;">
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Sid</i></b></u>
                                </h3>
                            </th>
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Name</i></b></u>
                                </h3>
                            </th>
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Contact</i></b></u>
                                </h3>
                            </th>
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Date</i></b></u>
                                </h3>
                            </th>
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Intime</i></b></u>
                                </h3>
                            </th>
                            <th>
                                <h3 style="font-family: new times roman;">
                                    <u><b><i>Outime</i></b></u>
                                </h3>
                            </th>
                        </tr>
            <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr><h3><td>" . $row['sid'] . "</td>";
                            echo "<td>" . $row['sname'] . "</td>";
                            echo "<td>" . $row['contact'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['intime'] . "</td>";
                            echo "<td>" . $row['outtime'] . "</td>";
                            echo "</h3></tr>";
                            echo "</form>";
                        }
                    } else {
                        echo '<script>alert("Invalid INTIME AND OUTTIME")</script>';
                    }
                }
            }
            ?>
        </table>
    </div>
        <br><br>
        <?php
        include "footer.php";
        ?>
</body>

</html>