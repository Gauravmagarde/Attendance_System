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
    <div class="text-center" style="margin-top:125px;">
        <h1 style="font-family:ruby; color:navy;">
            <b><u><i>Personal Information</i></u></b>
        </h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block" src="<?php echo "Images/" . $result['image'] ?>">
                <h4>
                    <b><u><i>
                                <?php echo $result['sname']; ?>
                            </i></u></b>
                </h4>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <i>
                            <?php
                            echo "<h4 style = 'font-family:new Times Roman;'><b>NAME :" . $result['sname'] . "</b><br><br><br>";
                            echo "<b>USERNAME:</th><th>" . $result['username'] . "</b><br><br><br>";
                            echo "<b>GENDER :" . $result['gender'] . "</b><br><br><br>";
                            echo "<b>BRANCH :" . $result['branchd'] . "</b></h4><br><br><br>";
                            ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo "<h4 style = 'font-family:new Times Roman;'><b>YEAR :" . $result['year'] . "</b><br><br><br>";
                        echo "<b>ADDRESS:" . $result['address'] . "</b><br><br><br>";
                        echo "<b>CONTACT:" . $result['contact'] . "</b></h4><br><br><br>";
                        ?>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-3 mb-4">
        <a href="parentdash_update.php">
            <button class="btn btn-primary" style="width: 150px; height:29px; background-color:navy; font-size:small;" name="submit">
                update
            </button>
        </a>
    </div>
    <br>
    <br>
    <?php
    include "Footer.php";
    ?>
</body>

</html>