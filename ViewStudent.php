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
        <div style="overflow-x:auto;margin-top: 125px;">
            <h1 Align="center" style="font-family: ruby;color: navy; ">
            <b><u><i> ALL STUDENTS INFORMATION</i></u></b>
        </h1>
        <br>
        <div class="text-center">
        <table cellpadding="20px" border="3px" style=" border-color:navy;margin-top: 17px;">
            <?php
            echo "<tr align='center' style='color: #800000; background: lightblue;'>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>SID</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>NAME</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>IMAGE</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>GENDER</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>BRANCH</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>YEAR</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>ADDRESS</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>CONTACT</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>EMAIL</h3></i></b></u></font></td>
                <td><font style='color: brown; font-family:ruby;' ><u><b><i><h3>USERNAME</h3></i></b></u></font></td>
                </tr></font>";
            $sql = "SELECT * FROM studentinfo ";
            $record = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($record)) {
                echo "<tr>";
                echo "<td><h3>" . $row['sid'] . "</h3></td>";
                echo "<td><h3>" . $row['sname'] . "</h3></td>";
                echo "<td><img src='Images/" . $row['image'] . "' style='height:130px; width:200px; border-radius:40px;'></td>";
                echo "<td><h3>" . $row['gender'] . "</h3></td>";
                echo "<td><h3>" . $row['branchd'] . "</h3></td>";
                echo "<td><h3>" . $row['year'] . "</h3></td>";
                echo "<td><h3>" . $row['address'] . "</h3></td>";
                echo "<td><h3>" . $row['contact'] . "</h3></td>";
                echo "<td><h3>" . $row['email'] . "</h3></td>";
                echo "<td><h3>" . $row['username'] . "</h3></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
    </div>
    </div>
    <br>
    <br>
    <?php
    include "Footer.php";
    ?>
</body>

</html>