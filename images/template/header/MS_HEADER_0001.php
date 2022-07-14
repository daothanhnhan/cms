
<?php include DIR_MENU."MS_MENU_0002.php";?>

<header>
    <div class="gb-top-header-cms">
        <div class="container">
            <ul>
                <li>
                    <?php include_once DIR_LANGUAGE."MS_LANGUAGE_0001.php";?>
                </li>
                <li>
                    <?php include_once DIR_CART."MS_CART_0001.php";?>
                </li>
                <?php if ($_GET['page'] == 'list-file') {  ?>
                <li>
                    <form action="" method="post">
                        <input type="text" name="tu" id="tu">
                        <button type="button" name="loc1" onclick="loc()">Lọc</button>
                    </form>                    
                </li>
                <?php } ?>
                <li>
                    <form>
                        <select onchange="cart(this)">
                            <option value="cart1" <?= ($_SESSION['cart_type']=='1') ? 'selected' : '' ?> >Giỏ hàng 1</option>
                            <option value="cart2" <?= ($_SESSION['cart_type']=='2') ? 'selected' : '' ?> >Giỏ hàng 2</option>
                            <option value="cart3" <?= ($_SESSION['cart_type']=='3') ? 'selected' : '' ?> >Giỏ hàng 3</option>
                            <option value="cart4" <?= ($_SESSION['cart_type']=='4') ? 'selected' : '' ?> >Giỏ hàng 4</option>
                            <option value="cart5" <?= ($_SESSION['cart_type']=='5') ? 'selected' : '' ?> >Giỏ hàng 5</option>
                        </select>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="gb-header-cms sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-md-2 col-sm-6 col-xs-6">
                    <div class="gb-logo-cms">
                        <h1><a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a></h1>
                    </div>
                </div>
                <div class="col-md-10">
                    <!--MENU TEXT-->
                    <?php include_once DIR_MENU."MS_MENU_0001.php";?>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
    function loc () {
        var tu = document.getElementById('tu').value;
        // alert(tu);
        if (tu == '') {
            var link = '<?= '/' . $_GET['page'] . '/' . $_GET['trang'] ?>';
        } else {
            var link = '<?= '/' . $_GET['page'] . '/' . $_GET['trang'] ?>' + '/1/' + tu;
        }
        
        // alert(link);
        window.location.href = link;
    }

    function cart (data) {
        // alert(data.value);
        var str = data.value;
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             // document.getElementById("demo").innerHTML = this.responseText;
             // alert(this.responseText);
             location.reload();
            }
          };
          xhttp.open("GET", "/functions/ajax/cart.php?str=" + str, true);
          xhttp.send();

    }
</script>