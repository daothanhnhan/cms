<?php 
    function filter_gia ($data) {
        $filter_price = unserialize($_SESSION['filter_price']);
        if (in_array($data, $filter_price)) {
            return 'checked';
        } else {
            return '';
        }
    }
?>
<div class="gb-loctheogia_ariotoys">
    <aside class="widget">
        <h3 class="widget-title"> Lọc theo giá</h3>
        <div class="widget-content">
            <div id="filterprice" class="collapse in">
                <label><input type="checkbox" name="price_1" value="" onclick="filter_price(this.name)" <?= filter_gia('price_1') ?> >
                    0đ - 10,000,000 đ <span></span>
                </label>
                <label><input type="checkbox" name="price_2" value="" onclick="filter_price(this.name)" <?= filter_gia('price_2') ?> >
                    10,000,000đ - 20,000,000 đ <span></span>
                </label>
                <label><input type="checkbox" name="price_3" value="" onclick="filter_price(this.name)" <?= filter_gia('price_3') ?> >
                    20,000,000đ - 30,000,000 đ <span></span>
                </label>
                <label><input type="checkbox" name="price_4" value="" onclick="filter_price(this.name)" <?= filter_gia('price_4') ?> >
                    30,000,000đ - 40,000,000 đ <span></span>
                </label>
                <label><input type="checkbox" name="price_5" value="" onclick="filter_price(this.name)" <?= filter_gia('price_5') ?> >
                    40,000,000đ - 50,000,000 đ <span></span>
                </label>
            </div>
        </div>
    </aside>
</div>
<script type="text/javascript">
    function filter_price (data) {
        
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              // document.getElementById("demo").innerHTML = this.responseText;
                // alert(this.responseText);
                location.reload();
            }
          };
          xhttp.open("GET", "/ajax/filter_price.php?data=" + data, true);
          xhttp.send();
    }
</script>