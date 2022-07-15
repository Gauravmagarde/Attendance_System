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
        <h1 class="text-center" style="font-family:ruby; color:navy;">
            <b><u><i>Write Letter For Leave</i></u></b>
        </h1><br><br><br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/lette.png" style="border:2px solid navy;">
            </div>
            <div class="col-md-4 text-center">
                <form method="POST">
                    <div class="form-group">
                        <textarea name="detail" placeholder="write reason for leave!" class="form-control rounded-0" style="border:2px solid Brown;" rows="7"></textarea>
                    </div>
                    <input type="hidden" name="sid" value="<?php echo $row['sid'] ?>">
                    <div>
                        <div>
                            <br>
                            <h3 style="font-family: new Times roman;"><i><b> Start Date</b></i></h3>
                            <input type="Date" name="sdate" Style="width:200px; height:30px;">
                        </div>
                        <br>
                        <div>
                            <h3 style="font-family: new Times roman;"><i><b> End Date</b></i></h3>
                            <input type="Date" name="edate" Style="width:200px; height:30px;">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="submit" class="btn btn-primary" style="width: 150px; height:29px; background-color:navy; font-size:small;" name="submit">
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/le.jpg" style="border:2px solid navy;">
            </div>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $detail = $_POST['detail'];
        $sdate = $_POST['sdate'];
        $edate = $_POST['edate'];
        $date = date("y-m-d");
        date_default_timezone_set("asia/kolkata");
        $sid = $_POST['sid'];
        if (empty($sdate) || empty($edate)) {
            echo "<script>alert('Please fill end date & start date ')</script>";
            echo "<script type='text/javascript'>
                              window.location.href='LeaveNotification.php'
                            </script>";
        } else {
            $sql = "insert into details (detail,date,sdate,edate,sid) values ('$detail','$date','$sdate','$edate','$sid')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Data  Insert Successfully')</script>";
                echo "<script type='text/javascript'>
                            window.location.href='LeaveNotification.php'
                          </script>";
            } else {
                echo "<script>alert('Data Not Insert')</script>";
                echo "<script type='text/javascript'>
                              window.location.href='LeaveNotification.php'
                            </script>";
            }
        }
    }
    ?>
    <br>
    <br>
    <br>
    <?php
    include "footer.php";
    ?>
</body>

</html>