<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
  include_once dirname(__FILE__) . "/../functions/library.php";
  include_once dirname(__FILE__) . "/../functions/pagination/Pagination.php";
  include_once dirname(__FILE__) . "/../functions/action.php";
  $action = new action();
  
	function keyword ($id) {
		global $conn_vn;
		if (isset($_POST['edit'])) {
      $name = mysqli_real_escape_string($conn_vn, $_POST['name']);
      $domain = mysqli_real_escape_string($conn_vn, $_POST['domain']);
      $domain1 = mysqli_real_escape_string($conn_vn, $_POST['domain1']);
      $domain2 = mysqli_real_escape_string($conn_vn, $_POST['domain2']);
			$domain3 = mysqli_real_escape_string($conn_vn, $_POST['domain3']);
      $check_name = isset($_POST['check_name']) ? 1 : 0;
      $check_0 = isset($_POST['check_0']) ? 1 : 0;
      $check_1 = isset($_POST['check_1']) ? 1 : 0;
      $check_2 = isset($_POST['check_2']) ? 1 : 0;
      $check_3 = isset($_POST['check_3']) ? 1 : 0;

      if ($check_0 == 0 && $check_1 == 0 && $check_2 == 0 && $check_3 == 0) {
        $check_name = 0;
      }

			$sql = "UPDATE keyword_1 SET name = '$name', domain = '$domain', domain1 = '$domain1', domain2 = '$domain2', domain3 = '$domain3', check_name = $check_name, check_0 = $check_0, check_1 = $check_1, check_2 = $check_2, check_3 = $check_3 WHERE id = $id";
			$result = mysqli_query($conn_vn, $sql);
			if ($result) {
				echo '<script type="text/javascript">alert(\'Bạn sửa từ khóa thành công.\')</script>';
			} else {
				echo '<script type="text/javascript">alert(\'Có lỗi xảy ra.\')</script>';
			}
		}
	}
	keyword($_GET['id']);

  $info = $action->getDetail('keyword_1', 'id', $_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>quản lý keyword</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sửa Từ khóa</h2>
  <h3><a href="/keyword_1">Quay lại</a></h3>
  <form action="" method="post">
    <div class="form-group">
      <label for="keyword">Từ khóa:</label>
      <input type="text" class="form-control" id="keyword" placeholder="Enter từ khóa" name="name" value="<?= $info['name'] ?>" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="check_name" <?= $info['check_name']==1 ? 'checked' : '' ?> > check keyword</label>
    </div>
    <div class="form-group">
      <label for="domain">Domain:</label>
      <input type="text" class="form-control" id="domain" placeholder="Enter domain" name="domain" value="<?= $info['domain'] ?>" required>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="check_0" <?= $info['check_0']==1 ? 'checked' : '' ?> > check domain</label>
    </div>
    <div class="form-group">
      <label for="domain1">Domain 1:</label>
      <input type="text" class="form-control" id="domain1" placeholder="Enter domain" name="domain1" value="<?= $info['domain1'] ?>" >
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="check_1" <?= $info['check_1']==1 ? 'checked' : '' ?> > check domain 1</label>
    </div>
    <div class="form-group">
      <label for="domain2">Domain 2:</label>
      <input type="text" class="form-control" id="domain2" placeholder="Enter domain" name="domain2" value="<?= $info['domain2'] ?>" >
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="check_2" <?= $info['check_2']==1 ? 'checked' : '' ?> > check domain 2</label>
    </div>
    <div class="form-group">
      <label for="domain3">Domain 3:</label>
      <input type="text" class="form-control" id="domain3" placeholder="Enter domain" name="domain3" value="<?= $info['domain3'] ?>" >
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="check_3" <?= $info['check_3']==1 ? 'checked' : '' ?> > check domain 3</label>
    </div>
    <button type="submit" name="edit" class="btn btn-default">Sửa</button>
  </form>
</div>

</body>
</html>
