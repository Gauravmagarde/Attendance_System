<?php
include "Header.php";
include "Connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/ParentLogin.css">
</head>

<body>
    <form method="POST">
        <div class="container A">
            <div class="row">
                <div class="col-md-4">
                    <br> <img class="img-fluid rounded mx-auto d-block" src="Images/ptlo.jpg">
                </div>
                <div class="col-md-4">
                    <br><br>
                    <img class="img-fluid rounded mx-auto d-block" src="Images/ptlog.png" style="width:20%; height:auto;">
                    <br>
                    <div class="text-center">
                        <h2 style="color: Navy;">
                            <u><i>Parent Login</i></u>
                        </h2>
                        <br>
                        <br>
                        <div class="form-group">
                            <h4><label for="exampleInputEmail1"><b>User Name</b></label></h4>
                            <input type="text" name="name" placeholder="User Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <h4> <label for="exampleInputPassword1"><b>Password</b></label></h4>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button name="submit" type="submit" class="mb-2 Submit_btn">Login</button>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <br><br>
                    <img class="img-fluid rounded mx-auto d-block" src="Images/ptl1.png">
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $name1 = $_POST['name'];
            $password1 = $_POST['password'];
            if (empty($name1) || empty($password1)) {
                echo "<br>please fill username and password";
            } else {
                $sql = "select * from studentinfo where username='$name1' AND password='$password1' ";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $dara = mysqli_fetch_array($result);
                if ($num == 1) {
                    session_start();
                    $sid = $dara['sid'];
                    $_SESSION['sid'] = $sid; 
                    echo "<script> 
                    window.location.href='ParentDash.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Invalid username & password');
                    </script>";
                }
            }
        }
        ?>
    </form>
    <br><br>
    <br>
    <?php
    include "Footer.php";
    ?>
</body>

</html>