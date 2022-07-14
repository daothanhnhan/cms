<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	include_once dirname(__FILE__) . "/../functions/library.php";
	include_once dirname(__FILE__) . "/../functions/pagination/Pagination.php";
	include_once dirname(__FILE__) . "/../functions/action.php";
  $action = new action();
  $list_gmail = $action->getList('gmail_2', '', '', 'id', 'asc', '', '', '');//var_dump($list_gmail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý gmail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Các gmail</h2>
  <h3><a href="/gmail_2/them-gmail.php">Thêm</a></h3>          
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $d = 0;
    foreach ($list_gmail as $item) { 
      $d++;
    ?>
      <tr>
        <td><?= $d ?></td>
        <td><?= $item['email'] ?></td>
        <td><a href="/gmail_2/sua-gmail.php?id=<?= $item['id'] ?>">Sửa</a> | <a href="/gmail_2/xoa-gmail.php?id=<?= $item['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa.')">Xóa</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
