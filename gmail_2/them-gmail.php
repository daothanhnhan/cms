<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
  
	function gmail () {
		global $conn_vn;
		if (isset($_POST['add'])) {
			$email = mysqli_real_escape_string($conn_vn, $_POST['email']);
			$pass = mysqli_real_escape_string($conn_vn, $_POST['pwd']);

			$sql = "INSERT INTO gmail_2 (email, password) VALUES ('$email', '$pass')";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn nhập gmail thành công.\');window.location.href="/gmail_2"</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
		}
	}
	gmail();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>quản lý gmail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Thêm gmail</h2>
  <h3><a href="/gmail_2">Quay lại</a></h3>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" name="add" class="btn btn-default">Thêm</button>
  </form>
</div>

</body>
</html>
