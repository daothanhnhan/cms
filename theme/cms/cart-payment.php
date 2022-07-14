<?php 
function curPageURL_paypal() {
     $pageURL = 'http';
     if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
     $pageURL .= "://";
     if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].'/';
     } else {
      $pageURL .= $_SERVER["SERVER_NAME"].'/';
     }
     return $pageURL;
}
$link_paypal = curPageURL_paypal();//die($link_paypal);

include_once 'functions/vendor/autoload.php';

// define('SITE_URL', 'http://vietnamfasttrack.org/');
define('SITE_URL', $link_paypal);

// tuan
// $paypal = new \PayPal\Rest\ApiContext(
//         new \PayPal\Auth\OAuthTokenCredential(
//                 'AYq5y9QlbbGxamZstVQWDD8-WzIgMcHfbcKJazHRSy7_ncmiedv-up80-JP7po2O1C2mvlif_GGShuVC',
//                 'EErTXQIqJyU6GFhvdlSC0nbCFqMEI4ztOa91xovHiBnPvERlnz8-0eyJJ129sBs7v6h5XnknLARise9y'
//             )
//     );

// hang
$paypal = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
                'AbTBweAEIPF4GcztSVffo0ecTvbzQMFyT14pXP3olUMeZDK_nNGPaw26eXHps-wbTX5NOjGIB62vdIGl',
                'EIKdUUHtXM0zMNwl0skt7YSEZMefTxA28qao5Dy0TQCxfUaN4REZTc4AXOGVpvO4IJyPfHseb9WEQRKK'
            )
    );


$paypal->setConfig([
    'mode' => ('live'),
]);
?>
<?php
    $products = $cart->getCart();
    $totalPrice = 0;
?>
<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"../functions/action_cart_tmp.php", 
                     url1:"..themes/dpgreen/cart-detail", 
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          // alert("Product has been Added into Cart"); 
                          // window.location = '/cart-detail';
                          if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                              window.location = '/cart-detail';
                          }else{
                              location.reload();
                          }

                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                // $.ajax({  
                //      url:"action.php",  
                //      method:"POST",  
                //      dataType:"json",  
                //      data:{product_id:product_id, action:action},  
                //      success:function(data){  
                //           $('#order_table').html(data.order_table);  
                //           $('.badge').text(data.cart_item);  
                //      }  
                // });  
                // alert(product_id);

                // var xhttp = new XMLHttpRequest();
                // xhttp.onreadystatechange = function() {
                //   if (this.readyState == 4 && this.status == 200) {
                //    // document.getElementById("demo").innerHTML = this.responseText;
                //    // alert(this.responseText);
                //    // alert('thanh cong.');
                //    window.location.href = "/cart-payment";
                //   }
                // };
                // xhttp.open("POST", "/themes/dpgreen/ajax-remove-cart.php", true);
                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // xhttp.send("action1=add_cart&product_id="+product_id+"&action=remove");
                // xhttp.send();

                 $.ajax({  
                     url:"../functions/action_cart_tmp.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                // $.ajax({  
                //      url :"action.php",  
                //      method:"POST",  
                //      dataType:"json",  
                //      data:{product_id:product_id, quantity:quantity, action:action},  
                //      success:function(data){  
                //           $('#order_table').html(data.order_table);  
                //      }  
                // });

                // alert(quantity);  
                //  var xhttp = new XMLHttpRequest();
                // xhttp.onreadystatechange = function() {
                //   if (this.readyState == 4 && this.status == 200) {
                //    // document.getElementById("demo").innerHTML = this.responseText;
                //    // alert(this.responseText);
                //    // alert('thanh cong.');
                //    setTimeout(function(){ window.location.href = "/cart-payment"; }, 2000);
                //   }
                // };
                // xhttp.open("POST", "/themes/dpgreen/ajax-quantity-cart.php", true);
                // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // xhttp.send("action1=add_cart&product_id="+product_id+"&quantity="+quantity+"&action=quantity_change");
                // xhttp.send();

                 $.ajax({  
                     url :"../functions/action_cart_tmp.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                }); 
           }  
      });  
 });  
 </script>
<?php 
	if (isset($_POST['txtName'])){
    $cart->scores();
		$cart->payment2();
		?>
		<!-- <script type="text/javascript">
			alert('Đặt hàng thành công');
		</script> -->
		<?php 
	}
?>
<div id="Content-Payment">
    <div class="Center-Width">
        <div class="Infor-Width">
            <div class="box_payment">
                <div class="gb-cart-payment">
                    <div class="container">
                        <div class="row" id="Content-mainSlide">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_default_1" data-toggle="tab">Thanh toán khi nhận hàng</a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_2" data-toggle="tab">Thanh toán Ngân lượng </a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_3" data-toggle="tab">Paypal </a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_4" data-toggle="tab">Onepay </a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_5" data-toggle="tab">VNpay </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_1">
                                                <div class="gb-thanhtooan-khi-nhanhang">
                                                    <div class="title_form">
                                                        <h1>Địa chỉ giao hàng</h1>
                                                    </div>
                                                    <form action="" method="POST" role="form" id="formPayment">
                                                        <div class="form-group">
                                                            <label for="inputTxtName">Họ tên</label>
                                                            <input type="text" class="form-control" name="txtName" id="inputTxtName" placeholder="Nhập Họ Tên" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input type="email" class="form-control" name="txtEmail" id="inputTxtEmail" placeholder="Nhập Email" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Điện thoại <span style="color:#C03;">(*)</span></label>
                                                            <input type="tel" class="form-control" name="txtPhone" id="inputTxtPhone" placeholder="Nhập Số Điện Thoại" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Địa chỉ <span style="color:#C03;">(*)</span></label>
                                                            <input type="text" class="form-control" name="txtAddress" id="inputTxtAddress" placeholder="Nhập Địa Chỉ Nhận Hàng" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ghi chú	</label>
                                                            <textarea name="txtNote" id="inputTxtNote" name="txtNote" class="form-control" rows="3" placeholder="Ghi chú đơn hàng"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Điểm tích: <?= $cart->get_scores() ?></label><br>
                                                            <input type="checkbox" name="scores" value="<?= $cart->get_scores() ?>"> Dùng điểm tích
                                                        </div>

                                                        <button type="submit" class="btn btn-primary" id="submitPayment">Hoàn Tất Mua Hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_default_2">
                                                <div class="gb-thanhtoan-tructuyen">
                                                    <div id="nglg">
                                                        <?php
                                                        if(!empty($_SESSION["shopping_cart"]))
                                                        {
                                                            $total = 0;
                                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
                                                            {
                                                                ?>
                                                                <input type="hidden" name="name[]" value="<?= $values['product_name'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="price[]" value="<?= $values['product_price'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="quantity[]" value="<?= $values['product_quantity'] ?>" form="nganluong" readonly >
                                                                <input type="hidden" name="link[]" value="<?= $_SERVER['SERVER_NAME'] . '/' . vi_en1($values['product_name']) ?>" form="nganluong" readonly >
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <?php include_once dirname(__FILE__) . "/../../functions/nganLuong/nganluong.php"; ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_default_3">
                                              <?php 
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;


  if (isset($_POST['payment_paypal'])) {

    $name = $_POST['namepaypal'];

    $amount = $_POST['phonepaypal'];

    $product = $name . '--' . $amount;
    // echo $product;


// $price = (float)$amount;
$shipping = 0.00;

// $total = $price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)
  ->setCurrency('USD')
  ->setQuantity(1)
  ->setPrice(0);

// $item_arr[] = $item;

// $item->setName('product1')
//   ->setCurrency('USD')
//   ->setQuantity(1)
//   ->setPrice(0.00);

// $item1 = new Item();
// $item1->setName('product2')
//   ->setCurrency('USD')
//   ->setQuantity(1)
//   ->setPrice(2.00);

if (!empty($_SESSION["shopping_cart"]))
{
  $price = 0;
  foreach($_SESSION["shopping_cart"] as $keys => $values) {
    $item = new Item();
    $item->setName($values['product_name'])
          ->setCurrency('USD')
          ->setQuantity($values['product_quantity'])
          ->setPrice($values['product_price']);
    $item_arr[] = $item;
    $price += $values['product_quantity'] * $values['product_price'];
  }
  $total = $price + $shipping;
} else {
  die('giỏ hàng trống.');
}

$itemList = new ItemList();
$itemList->setItems($item_arr);

$details = new Details();
$details->setShipping($shipping)
  ->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('USD')
  ->setTotal($total)
  ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
  ->setItemList($itemList)
  ->setDescription('mo ta o day')
  ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . 'pay.php?success=true')
  ->setCancelUrl(SITE_URL . 'pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
  ->setPayer($payer)
  ->setRedirectUrls($redirectUrls)
  ->setTransactions([$transaction]);

try {
  $payment->create($paypal);
} catch (Exception $e) {
  echo '<pre>';
  var_dump($e);
  die();
}

$approvalUrl = $payment->getApprovalLink();
echo $approvalUrl;

header("location: {$approvalUrl}");
  }
?>
                                                <div class="gb-thanhtooan-khi-nhanhang">
                                                    <div class="title_form">
                                                        <h1>Thanh toán Paypal</h1>
                                                    </div>
                                                    <form action="" method="POST" role="form" id="formPayment">
                                                        <div class="form-group">
                                                            <label for="namepaypal">Họ tên</label>
                                                            <input type="text" class="form-control" name="namepaypal" id="namepaypal" placeholder="Nhập Họ Tên" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phonepaypal">Số điện thoại</label>
                                                            <input type="number" class="form-control" name="phonepaypal" id="phonepaypal" placeholder="Nhập số điện thoại" required="required">
                                                        </div>
                                                        

                                                        <button type="submit" name="payment_paypal" class="btn btn-primary" id="submitPaymentPappal">Hoàn Tất Mua Hàng</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_default_4">
                                              <div class="gb-thanhtooan-khi-nhanhang">
                                              		<?php 
                                                	$total = 0;
                                                	foreach ($_SESSION['shopping_cart'] as $values) {
                                                		$total += $values['product_quantity'] * $values['product_price'];
                                                	}
                                                	?>
                                                    <div class="title_form">
                                                        <h1>Thanh toán Onepay</h1>
                                                    </div>
                                                    <form action="/onepay/do.php" method="post">
                                                        <input type="hidden" name="virtualPaymentClientURL"
      size="63" value="https://mtf.onepay.vn/onecomm-pay/vpc.op"
      maxlength="250" />
                                                        <input type="hidden" name="vpc_Merchant" value="ONEPAY" size="20"
        maxlength="16" />
                                                        <input type="hidden" name="vpc_AccessCode" value="D67342C2"
        size="20" maxlength="8" />
                                                        <input type="hidden" name="vpc_MerchTxnRef"
        value="<?php
        echo date ( 'YmdHis' ) . rand ();
        ?>" size="20"
        maxlength="40" />
                                                        <input type="hidden" name="vpc_OrderInfo" value="JSECURETEST01"
        size="20" maxlength="34" />
                                                        <input type="text" name="vpc_Amount" value="<?= $total*100 ?>" size="20"
        maxlength="10" />
                                                        <input type="hidden" name="vpc_ReturnURL" size="45"
        value="http://cmsver01.webmienphi.org.vn/onepay/dr.php"
        maxlength="250" />
                                                        <input type="hidden" name="vpc_Version" value="2" size="20"
        maxlength="8" />
                                                        <input type="hidden" name="vpc_Command" value="pay" size="20"
        maxlength="16" />
                                                        <input type="hidden" name="vpc_Locale" value="vn" size="20"
        maxlength="5" />
                                                        <input type="hidden" name="vpc_Currency" value="VND" size="20"
        maxlength="5" />
                                                        <input type="submit"  value="Pay Now!" />
                                                    </form>
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="tab_default_5">
                                              <h1>Thanh toán VNpay</h1>
                                              <form action="/vnpay_php/vnpay_create_payment.php" id="create_form" method="post">       

                                                  <div class="form-group">
                                                      <label for="language">Loại hàng hóa </label>
                                                      <select name="order_type" id="order_type" class="form-control">
                                                          <option value="topup">Nạp tiền điện thoại</option>
                                                          <option value="billpayment">Thanh toán hóa đơn</option>
                                                          <option value="fashion">Thời trang</option>
                                                          <option value="other">Khác - Xem thêm tại VNPAY</option>
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="order_id">Mã hóa đơn</label>
                                                      <input class="form-control" id="order_id" name="order_id" type="text" value="20191227230734">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="amount">Số tiền</label>
                                                      <input class="form-control" id="amount" name="amount" type="number" value="10000">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="order_desc">Nội dung thanh toán</label>
                                                      <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="bank_code">Ngân hàng</label>
                                                      <select name="bank_code" id="bank_code" class="form-control">
                                                          <option value="">Không chọn</option>
                                                          <option value="VNPAYQR">VNPAYQR</option>
                                                          <option value="NCB"> Ngan hang NCB</option>
                                                          <option value="AGRIBANK"> Ngan hang Agribank</option>
                                                          <option value="SCB"> Ngan hang SCB</option>
                                                          <option value="SACOMBANK">Ngan hang SacomBank</option>
                                                          <option value="EXIMBANK"> Ngan hang EximBank</option>
                                                          <option value="MSBANK"> Ngan hang MSBANK</option>
                                                          <option value="NAMABANK"> Ngan hang NamABank</option>
                                                          <option value="VNMART"> Vi dien tu VnMart</option>
                                                          <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                                          <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                                          <option value="HDBANK">Ngan hang HDBank</option>
                                                          <option value="DONGABANK"> Ngan hang Dong A</option>
                                                          <option value="TPBANK"> Ngân hàng TPBank</option>
                                                          <option value="OJB"> Ngân hàng OceanBank</option>
                                                          <option value="BIDV"> Ngân hàng BIDV</option>
                                                          <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                                          <option value="VPBANK"> Ngan hang VPBank</option>
                                                          <option value="MBBANK"> Ngan hang MBBank</option>
                                                          <option value="ACB"> Ngan hang ACB</option>
                                                          <option value="OCB"> Ngan hang OCB</option>
                                                          <option value="IVB"> Ngan hang IVB</option>
                                                          <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="language">Ngôn ngữ</label>
                                                      <select name="language" id="language" class="form-control">
                                                          <option value="vn">Tiếng Việt</option>
                                                          <option value="en">English</option>
                                                      </select>
                                                  </div>

                                                  <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Popup</button>
                                                  <button type="submit" class="btn btn-default">Thanh toán Redirect</button>

                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 infor_cart">
                                <div class="gb-thongtin-donhang">
                                    <div class="title_form">
                                        <p style="margin:0.67em 0px; font-size:22px;">Thông tin đơn hàng</p>
                                    </div>
                                    <div class="table-responsive" id="order_table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 40%;">Product Name</th>
                                                <th style="width: 7%;">Quantity</th>
                                                <th style="width: 25%;">Price</th>
                                                <th style="width: 25%;">Total</th>
                                                <th style="width: 3%;">Action</th>
                                            </tr>
                                            <?php
                                            if(!empty($_SESSION["shopping_cart"]))
                                            {
                                                $total = 0;
                                                foreach($_SESSION["shopping_cart"] as $keys => $values)
                                                {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $values["product_name"]; ?></td>
                                                        <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>
                                                        <td><?php echo number_format($values["product_price"]); ?> VNĐ</td>
                                                        <td><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?> VNĐ</td>
                                                        <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                    </tr>
                                                    <?php
                                                    $total = $total + ($values["product_quantity"] * $values["product_price"]);
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="3" align="right">Total</td>
                                                    <td align="right"><?php echo number_format($total, 2); ?> VNĐ</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" align="right">
                                                        <form method="post" action="/cart-payment">
                                                            <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                    <a class="btn btn-default pull-right" href="/gio-hang" role="button" style="background-color:#48BD2B; border:none; font-weight:bold; color:#fff;">Mua Hàng Tiếp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>