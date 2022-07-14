<?php 
  // var_dump($_SESSION);die;
?>
<div class="uni-cart">
    <div id="wrapper-container" class="site-wrapper-container">
        <div id="main-content" class="site-main-content">
            <div class="site-content-area">
                <main id="main" class="site-main">

                    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0001.php';?>

                    <div class="uni-cart-body">
                        <div id="post" class="container">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="table-responsive" id="order_table" style="width: 100%;">  
                                       <table class="table table-bordered" style="margin-bottom: 100px;">  
                                            <tr>  
                                                 <th width="30%">Product Name</th>  
                                                 <th width="5%">Product Color</th>
                                                 <th width="5%">Product Size</th>
                                                 <th width="10%">Quantity</th>  
                                                 <th width="20%">Price</th>  
                                                 <th width="15%">Total</th>  
                                                 <th width="5%">Action</th>  
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
                                                 <td><?php echo $values["product_color"]; ?></td>
                                                 <td><?php echo $values["product_size"]; ?></td>
                                                 <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_size="<?= $values["product_size"] ?>" data-product_color="<?= $values["product_color"] ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                                 <td align="right"><?php echo number_format($values["product_price"]); ?> VNĐ</td>  
                                                 <td align="right"><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?> VNĐ</td>  
                                                 <td><button name="delete" class="btn btn-danger btn-xs delete" color="<?= $values['product_color'] ?>" size="<?= $values['product_size'] ?>" id="<?php echo $values["product_id"]; ?>" style="margin: 0px;">Remove</button></td>  
                                            </tr>  
                                            <?php  
                                                      $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                                 }  
                                            ?>  
                                            <tr>  
                                                 <td colspan="5" align="right">Total</td>  
                                                 <td align="right"><?php echo number_format($total, 2); ?> VNĐ</td>  
                                                 <td></td>  
                                            </tr>  
                                            <tr>  
                                                 <td colspan="7" align="center">  
                                                      <form method="post" action="/thanh-toan">  
                                                           <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" style="width: 15%;" />  
                                                      </form>  
                                                 </td>  
                                            </tr>  
                                            <?php  
                                            }  
                                            ?>  
                                       </table>  
                                  </div>   
                                    <!-- <div class="cart-collaterals">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="cart_totals">
                                                    <h2>Thông tin giỏ hàng</h2>
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart-subtotal">
                                                            <th>Tổng giá</th>
                                                            <td>300.000 <span>đ</span></td>
                                                        </tr>
                                                        <tr class="cart-vat">
                                                            <th>Vat</th>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng giá + Vat</th>
                                                            <td>330.000 <span>đ</span> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="wc-proceed-to-checkout">
                                                        <a href="#" class="checkout-button button alt wc-forward">Đặt hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </div>
</div>
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
                          alert("Product has been Added into Cart");  
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
           var color = $(this).attr("color");
           var size = $(this).attr("size");
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"../functions/action_cart_tmp1.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, product_color:color, product_size:size, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);
                          // alert(data.order_table);
                          // alert('success');
                     },
                     error:function(){
                        alert('loi.');
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
           var color = $(this).data('product_color');
           var size = $(this).data('product_size');
           // alert(size);return false;
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"../functions/action_cart_tmp1.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, product_color:color, product_size:size, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  


           }  
      });  
 });  
 </script>