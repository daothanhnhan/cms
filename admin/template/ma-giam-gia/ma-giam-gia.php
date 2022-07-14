<?php 
$rows = $action->getList('discount_code','','','id','desc',$trang,20,'ma-giam-gia');//var_dump($rows_lien_he);die();
?>
<div class="container">
  <h2>Bảng Mã giảm giá.</h2>            
  <table class="table">
    <thead>
      <tr>
      	<th>STT</th>
        <th>Code</th>
        <th>Type</th>
        <th>Number</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach ($rows['data'] as $item) { 
    ?>
      <tr>
        <td><?php echo $i;?></td>
        <td><a href="/admin/index.php?page=sua-ma-giam-gia&id=<?= $item['id'] ?>"><?php echo $item['code'];?></a></td>
        <td><?php echo ($item['type']==1) ? 'Phần trăm' : 'Chiết khấu';?></td>
        <td><?php echo $item['number'];?></td>
        <td><a href="/admin/index.php?page=xoa-ma-giam-gia&id=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa.');">DEL</a></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
<?php
    echo $rows['paging'];
?>