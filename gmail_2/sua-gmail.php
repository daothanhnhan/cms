<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
  include_once dirname(__FILE__) . "/../functions/library.php";
  include_once dirname(__FILE__) . "/../functions/pagination/Pagination.php";
  include_once dirname(__FILE__) . "/../functions/action.php";
  $action = new action();

	function gmail ($id) {
		global $conn_vn;
		if (isset($_POST['edit'])) {
			$email = mysqli_real_escape_string($conn_vn, $_POST['email']);
			$pass = mysqli_real_escape_string($conn_vn, $_POST['pwd']);

			$sql = "UPDATE gmail_2 SET email = '$email', password = '$pass' WHERE id = $id";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn sửa gmail thành công.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
		}
	}
	gmail($_GET['id']);

  $info = $action->getDetail('gmail_2', 'id', $_GET['id']);
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
  <h2>Sửa gmail</h2>
  <h3><a href="/gmail_2">Quay lại</a></h3>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $info['email'] ?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?= $info['password'] ?>">
    </div>
    
    <button type="submit" name="edit" class="btn btn-default">Sửa</button>
  </form>
</div>

</body>
</html>
