<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	include_once dirname(__FILE__) . "/../functions/library.php";
	include_once dirname(__FILE__) . "/../functions/pagination/Pagination.php";
	include_once dirname(__FILE__) . "/../functions/action.php";
  $action = new action();
  $list_keyword = $action->getList('keyword', '', '', 'id', 'asc', '', '', '');//var_dump($list_gmail);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý từ khóa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Các từ khóa</h2>
  <h3><a href="/keyword/them-keyword.php">Thêm</a></h3>          
  <table class="table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Keyword</th>
        <th>Domain</th>
        <th>Domain1</th>
        <th>Domain2</th>
        <th>Domain3</th>
        <th>Action</th>
        <th>Chọn</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $d = 0;
    foreach ($list_keyword as $item) { 
      $d++;
    ?>
      <tr>
        <td><?= $d ?></td>
        <td><?= $item['name'] ?></td>
        <td><?= $item['domain'] ?> <input type="checkbox" name="" onclick="chk(0, <?= $item['id'] ?>)" <?= $item['check_0']==1 ? 'checked' : '' ?> ></td>
        <td><?= $item['domain1'] ?> <input type="checkbox" name="" onclick="chk(1, <?= $item['id'] ?>)" <?= $item['check_1']==1 ? 'checked' : '' ?> ></td>
        <td><?= $item['domain2'] ?> <input type="checkbox" name="" onclick="chk(2, <?= $item['id'] ?>)" <?= $item['check_2']==1 ? 'checked' : '' ?> ></td>
        <td><?= $item['domain3'] ?> <input type="checkbox" name="" onclick="chk(3, <?= $item['id'] ?>)" <?= $item['check_3']==1 ? 'checked' : '' ?> ></td>
        <td><a href="/keyword/sua-keyword.php?id=<?= $item['id'] ?>">Sửa</a> | <a href="/keyword/xoa-keyword.php?id=<?= $item['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa.')">Xóa</a></td>
        <td><input type="checkbox" name="" onclick="sel(<?= $item['id'] ?>)" <?= $item['check_name']==1 ? 'checked' : '' ?> ></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
<script type="text/javascript">
  function chk (pos, id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       var out = this.responseText;
       
       if (out == 'fail') {
        alert('Bạn phải chọn ít nhất một domaim');
        location.reload();
       }
      }
    };
    xhttp.open("GET", "set_check_domain.php?pos="+pos+"&id="+id, true);
    xhttp.send();
  }

  function sel (id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var out = this.responseText;   
        if (out == 'fail') {
          alert('Bạn phải chọn ít nhất một domaim');
          location.reload();
        }    
      }
    };
    xhttp.open("GET", "set_check_keyword.php?id="+id, true);
    xhttp.send();
  }
</script>
</html>
