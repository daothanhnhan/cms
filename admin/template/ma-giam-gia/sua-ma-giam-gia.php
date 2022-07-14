<?php 
  $message = '';
  function edit_code_sale () {
    global $conn_vn;
    global $message;
    if (isset($_POST['edit_code_sale'])) {
      $ok = 'true';
      // var_dump($_POST);die;
      $code = trim($_POST['code']);
      $type = $_POST['type'];
      $number = $_POST['number'];
      $sql = "SELECT * FROM discount_code WHERE id = " . $_GET['id'];
      $result = mysqli_query($conn_vn, $sql);
      $code1 = mysqli_fetch_assoc($result)['code'];
      if ($code != $code1) {
        $sql = "SELECT * FROM discount_code WHERE code = $code";
        $result = mysqli_query($conn_vn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
          $ok = 'false';
          $message = 'Mã này đã tồn tại.';
        }
      }
      
      if ($ok == 'true') {
        $sql = "UPDATE discount_code SET code = '$code', type = $type, `number` = $number WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn_vn, $sql);
        echo '<script type="text/javascript">alert(\'bạn đã sửa code giảm giá thành công\');</script>';
      }
    }
  }
  edit_code_sale();
  function get_code_sale () {
    global $conn_vn;
    $id = $_GET['id'];
    $sql = "SELECT * FROM discount_code WHERE id = $id";
    $result = mysqli_query($conn_vn, $sql);
    $row = array();
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }
    return $row;
  }
  $code_sale = get_code_sale();
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
            <input type="text" class="txtNCP1" id="code" name="code" value="<?= $code_sale['code'] ?>" required />
            <p class="titleRightNCP">Type</p>
            <select class="txtNCP1" name="type">
              <?php foreach ($list_type_code as $item) { ?>
              <option value="<?= $item['id'] ?>" <?= ($code_sale['type']==$item['id']) ? 'selected' : '' ?> ><?= $item['name'] ?></option>
              <?php } ?>
            </select>
            <p class="titleRightNCP">Number</p>            
            <input type="number" class="txtNCP1" id="number" name="number" value="<?= $code_sale['number'] ?>" required />
        </div>
    </div>
    
    <button type="submit" name="edit_code_sale" class="btn btnSave">Lưu</button>
    
</form>
