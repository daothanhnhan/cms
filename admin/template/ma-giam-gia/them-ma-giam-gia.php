<?php 
  $message = '';
  function add_code_sale () {
    global $conn_vn;
    global $message;
    if (isset($_POST['add_code_sale'])) {
      $ok = 'true';
      // var_dump($_POST);die;
      $code = trim($_POST['code']);
      $type = $_POST['type'];
      $number = $_POST['number'];
      $sql = "SELECT * FROM discount_code WHERE code = '$code'";
      $result = mysqli_query($conn_vn, $sql);
      $num = mysqli_num_rows($result);
      if ($num > 0) {
        $ok = 'false';
        $message = 'Mã này đã tồn tại.';
      } else {
        $sql = "INSERT INTO discount_code (code, type, `number`) VALUES ('$code', $type, $number)";
        $result = mysqli_query($conn_vn, $sql);
        echo '<script type="text/javascript">alert(\'bạn đã thêm code giảm giá thành công\');window.location.href="/admin/index.php?page=ma-giam-gia";</script>';
      }
      
    }
  }
  add_code_sale();
  function list_type_code () {
    global $conn_vn;
    $sql = "SELECT * FROM discount_code_type";
    $result = mysqli_query($conn_vn, $sql);
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
  $list_type_code = list_type_code();
?>

<form action="" method="post" accept-charset="utf-8">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Nội dung trang</span>
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP" style="color: red;"><?= $message ?></p>
            <p class="titleRightNCP">Code</p>
            <input type="text" class="txtNCP1" id="code" name="code" required />
            <p class="titleRightNCP">Type</p>
            <select class="txtNCP1" name="type">
              <?php foreach ($list_type_code as $item) { ?>
              <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
              <?php } ?>
            </select>
            <p class="titleRightNCP">Number</p>            
            <input type="number" class="txtNCP1" id="number" name="number" required />
        </div>
    </div>
    
    <button type="submit" name="add_code_sale" class="btn btnSave">Lưu</button>
    
</form>
