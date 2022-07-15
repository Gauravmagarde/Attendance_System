<?php
include "Header.php";
include "Connection.php";
session_start();
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
    <link rel="stylesheet" href="CSS/AdminLogin.css">
</head>

<body>
    <div class="container A">
        <div class="row">
            <div class="col-md-4 mt-4">
                <img class="img-fluid rounded mx-auto d-block" src="Images/admin panel.jpg">
            </div>
             <div class="col-md-4 text-center">
             <br>
                <h1 class="text-center mt-3" style="font-family: ruby; color: navy;">
                    <b><u><i>Admin Login Form</i></u></b>
                </h1>
                <form method="post">
                    <img class="img-fluid rounded mx-auto d-block mt-3" style="width:25%;" src="Images/ad.jpg">
                    <div class="form-group mt-4">
                    <h4>  <label for="exampleInputEmail1"><b>User Name</b></label></h4>
                        <input type="text" name="username" placeholder="User Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                    <h4>  <label for="exampleInputPassword1"><b>Password</b></label></h4>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <br>
                    <a href="">
                        <button type="submit" class="mb-3 Submit_btn" name="submit" value="login">
                            login
                        </button>
                    </a>
                </form>
            </div>
            <div class="col-md-4">
                <img class="img-fluid rounded mx-auto d-block mt-4 mb-3" src="Images/admin.jpg">
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $username1 = $_POST['username'];
        $password1 = $_POST['password'];
        if (empty($username1) || empty($password1)) {
            echo "please fill username and password";
        } else {
            $sql = "select * from admin where username='$username1' and password='$password1'";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['username'] = $username1;
                echo "<script>window.location.href='AdminDash.php'</script>";
            } else {
                echo "Invalid username & password";
            }
        }
    }
    ?>
    </table>
    <br><br><br>
<?php
include "Footer.php";
?>
</body>

</html>