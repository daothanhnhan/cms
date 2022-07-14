<div class="uni-checkout-cms">
    <div id="wrapper-container-cms" class="site-wrapper-container-cms">

        <div id="main-content-cms" class="site-main-cms-content-cms">
            <div class="site-content-area-cms">
                <main id="main" class="clearfix right_sidebar">


                    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0001.php';?>

                    <div class="uni-checkout-cms-body">
                        <div class="container">
                            <div class="tg-container-cms">
                                <div id="primary">

                                    <div class="entry-thumbnail-cms">

                                        <div class="entry-content-cms-text-wrapper clearfix">
                                            <div class="entry-content-cms-wrapper">
                                                <div class="entry-content-cms">
                                                    <div class="woocommerce">
                                                        <div class="woocommerce-info">
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Returning customer
                                                            <a href="#" class="showcoupon click-here-to-login">Click here to login </a>
                                                        </div>
                                                        <div class="vk-form-woo-login-cms">
                                                            <div class="row">
                                                                <form class="woocomerce-form woocommerce-form-login login" method="post" >
                                                                    <div class="col-md-12">
                                                                        <p>If you shopped with us before, please enter your details in the boxes below.
                                                                            If you are a new customer, please proceed to the Billing & Shipping section.
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-first">
                                                                            <input type="text" class="input-text" name="username" id="nameemail" placeholder="Username or email">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p class="form-row form-row-last">
                                                                            <input class="input-text" type="password" name="password" id="password" placeholder="Password">
                                                                        </p>
                                                                    </div>
                                                                    <div class="clear"></div>


                                                                    <div class="col-md-12">
                                                                        <div class="vk-checkout-login">
                                                                            <div class="row">
                                                                                <div class="col-md-9">
                                                                                    <p class="form-row">
                                                                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="b6598ef61e">
                                                                                        <input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/">
                                                                                        <input type="submit" class="button" name="login" value="LOGIN">
                                                                                        <input type="hidden" name="redirect" value="">
                                                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                                                                            <span>Remember me</span>
                                                                                        </label>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p class="lost_password">
                                                                                        <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Lost your password?</a>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </form>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>

                                                        <div class="woocommerce-info">
                                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Have a coupon
                                                            <a href="#" class="showcoupon click-here-entry-code">Click here to entry your code </a>
                                                        </div>

                                                        <div class="vk-check-coupon">
                                                            <div class="row">
                                                                <form class="checkout_coupon" method="post">

                                                                    <div class="col-md-9">
                                                                        <p class="form-row form-row-first">
                                                                            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p class="form-row form-row-last">
                                                                            <input type="submit" class="button" name="apply_coupon" value="APPLY COUPON">
                                                                        </p>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="vk-checkout-billing-left">
                                                                <div class="col-md-6">
                                                                    <div class="woocommerce-billing-fields">

                                                                        <h3>Billing details</h3>
                                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-first " >
                                                                                        <label  class="">First name <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last " >
                                                                                        <label class="">Last name <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last ">
                                                                                        <label  class="">Phone <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <p class="form-row form-row-last ">
                                                                                        <label class="">Email <abbr class="required" title="required">*</abbr></label>
                                                                                        <input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="form-row form-row-last " >
                                                                                <label class="">Company name</label>
                                                                                <input type="text" class="input-text "  placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last" >
                                                                                <label for="billing_country" class="">Country</label>
                                                                                <select name="billing_country" class="country_to_state " autocomplete="country" >
                                                                                    <option value="">Select a country…</option>
                                                                                    <option value="AX">Åland Islands</option>
                                                                                    <option value="AF">Afghanistan</option>
                                                                                    <option value="AL">Albania</option>
                                                                                </select>
                                                                            </p>
                                                                            <p class="form-row form-row-last">
                                                                                <label  class="">Address<abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last " >
                                                                                <label class="">Town/City<abbr class="required" title="required">*</abbr></label>
                                                                                <input type="text" class="input-text " name="billing_town_city" id="billing_town_city" placeholder="" value="">
                                                                            </p>
                                                                            <p class="form-row form-row-last ">
                                                                                <label class="">Postcode/ZIP</label>
                                                                                <input type="text" class="input-text " placeholder="" value="" >
                                                                            </p>
                                                                            <p class="form-row form-row-last ">
                                                                                <label class="">Order Notes</label>
                                                                                <textarea class="input-text "  placeholder="" ></textarea>
                                                                            </p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="vk-checkout-creat-account">
                                                                        <h3>
                                                                            <input  type="checkbox" class="input-radio checkbox-create-account" >

                                                                            <label for="payment_method_cheque">
                                                                                Create An Account?</label>
                                                                        </h3>
                                                                        <div class="vk-check-create-account-form checkbox-create-account-form">
                                                                            <form class="woocomerce-form woocommerce-form-login login" method="post" >
                                                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.
                                                                                </p>
                                                                                <p class="form-row form-row-first">
                                                                                    <label class="">Password <abbr class="required" title="required">*</abbr></label>
                                                                                    <input type="password" class="input-text" name="username" id="username" placeholder="">
                                                                                </p>
                                                                                <div class="clearfix"></div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="vk-checkout-order-paypal">
                                                                        <div id="order_review">
                                                                            <div class="vk-checkout-order-left">
                                                                                <h3>Your order</h3>
                                                                                <table class="shop_table">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th class="product-name">Product</th>
                                                                                        <th class="product-total">Total</th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr class="cart_item">
                                                                                        <td class="product-name">
                                                                                            Beautiful White T-Shirt
                                                                                        </td>
                                                                                        <td class="product-total">
                                                                                            300.000 <span>đ</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr class="cart_item">
                                                                                        <td class="product-name">
                                                                                            Beautiful White T-Shirt
                                                                                        </td>
                                                                                        <td class="product-total">
                                                                                            300.000 <span>đ</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                    <tfoot>

                                                                                    <tr class="cart-subtotal">
                                                                                        <th>Subtotal</th>
                                                                                        <th>300.000 <span>đ</span></th>
                                                                                    </tr>
                                                                                    <tr class="cart-subtotal">
                                                                                        <th>VAT</th>
                                                                                        <th>10 <span>%</span></th>
                                                                                    </tr>
                                                                                    <tr class="order-total">
                                                                                        <th>Total</th>
                                                                                        <th><strong>330.000 <span>đ</span></strong> </th>
                                                                                    </tr>

                                                                                    </tfoot>
                                                                                </table>
                                                                            </div>

                                                                            <div id="payment" class="woocommerce-checkout-payment">
                                                                                <h3>Payment method</h3>
                                                                                <ul>
                                                                                    <li>
                                                                                        <input type="radio" class="input-radio" value="cheque" checked="checked" data-order_button_text="">

                                                                                        <label for="payment_method_cheque">
                                                                                            Check payments 	</label>
                                                                                        <div class="payment_box payment_method_cheque">
                                                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li><hr></li>
                                                                                    <li>
                                                                                        <input  type="radio" class="input-radio"  value="paypal">

                                                                                        <label for="payment_method_paypal">
                                                                                            PayPal <img src="images/paypal.jpg" alt="PayPal acceptance mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                                                                        <div class="payment_box payment_method_paypal" style="display:none;">
                                                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="form-row place-order">
                                                                                    <noscript>
                                                                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                                                                                    </noscript>

                                                                                    <input type="submit" class="button alt"  id="place_order" value="PLACE ORDER" data-value="Place order">

                                                                                    <input type="hidden" id="wpnonce" ><input type="hidden"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- .entry-content-cms -->
                                            </div>
                                        </div>
                                    </div>


                                </div> <!-- Primary end -->
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //------------------------checkout-----------------------------
    $('.woocommerce-info').on('click', function (e) {
        if($(e.target).is('.click-here-to-login')){
            $('.vk-form-woo-login-cms').slideToggle();
            return false;
        }
        if($(e.target).is('.click-here-entry-code')){
            $('.vk-check-coupon').slideToggle();
            return false;
        }
    });
    $('.vk-checkout-billing-left').on('click', function (e) {
        if($(e.target).is('.checkbox-create-account')){
            $('.checkbox-create-account-form').slideToggle();
        }
    });
    });
</script>