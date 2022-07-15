<?php
include "Header.php";
include 'Connection.php';
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
	<link rel="stylesheet" href="CSS/Record.css">
</head>

<body>
	<form method="post">
		<div class="container A">
			<div class="text-center mt-5">
				<h1 style="color: brown;"><u><i>Student Id</i></u></h1>
			</div>
			<div class="row mt-2 mb-5">
				<div class="col-md-6">
					<img class="img-fluid" src="Images/cd1.jpg">
				</div>
				<div class="col-md-6 mt-5 mb-5 text-center">
					<h2 style="color: navy;"><i>Scan Your Id Card</i></h2><br>
					<input class="w-75 p-3 h-75 d-inline-block" type="textarea" name="textbox"><br><br><br><br>
					<input type="submit" class="Submit_btn" id="submit" name="submit">
				</div>
			</div>
		</div>
		<?php
		if (isset($_POST['submit'])) {
			$textbox = $_POST['textbox'];
			$sql = "select * from studentinfo where sid='$textbox'";
			$result = mysqli_query($conn, $sql);
			if ($row = mysqli_fetch_array($result)) {
				$_SESSION['sid'] = $row['sid'];
				$sid = $_SESSION['sid'];
				echo "<script>window.location.href='Record.php'</script>";
			}
		}
		?>
	</form>
	<br><br><br>
	<?php
	include "Footer.php";
	?>
</body>

</html>