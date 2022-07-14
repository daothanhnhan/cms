<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css'>

<div class="gb-language-cms">
    <select class="selectpicker" data-width="fit" onchange="langs(this)">
        <option  data-content='<span class="flag-icon flag-icon-vn"></span> VN' value="vn" <?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 'vn')?'selected':'';?> ></option>
        <option data-content='<span class="flag-icon flag-icon-us"></span> EN' value="en" <?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en')?'selected':'';?> ></option>
    </select>
</div>

<!--<script src="./plugin/vidu/jQueryZoomImageonMouseOver/js/jquery.elevatezoom.min.js" type="text/javascript"></script>-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js'></script>
<script>
    $(document).ready(function () {
        $(function(){
            $('.selectpicker').selectpicker();
        });
    });
</script>