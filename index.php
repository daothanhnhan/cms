<?php
//phpinfo();die;
session_start();
ob_start();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$folder = dirname(__FILE__);
include_once('config.php');
include_once('__autoload.php');
$action = new action();
include_once dirname(__FILE__).DIR_FUNCTIONS."database.php";
// $urlAnalytic = $action->showabc();    
include_once dirname(__FILE__).DIR_FUNCTIONS_PAGING."pagination.php";
include_once 'functions/phpmailer/class.smtp.php';
include_once 'functions/phpmailer/class.phpmailer.php';
include_once "functions/vi_en.php";
include_once "functions/nganLuong/config.php";
include_once "functions/nganLuong/NL_Checkoutv3.php";
// // LÀM RÕ NHỮNG THƯ VIỆN NÀY
// // include_once('lib/vi_en.php');
// // include_once('lib/nganLuong/NL_Checkoutv3.php');

// // LÀM RÕ Install Cart

// Install MultiLanguage
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE."lang_config.php";
include_once dirname(__FILE__).DIR_FUNCTIONS_LANGUAGE.$lang_file;
// Install Friendly Url
include_once dirname(__FILE__).DIR_FUNCTIONS_URL."url_config.php";
// Configure Website
include_once dirname(__FILE__).DIR_FUNCTIONS."website_config.php";
// echo $translate['link_contact'];die;
$trang = isset($_GET['trang']) ? $_GET['trang'] : '1';
$action = new action();
$cart = new action_cart();
$menu = new action_menu();
$rowConfig = $action->getDetail('config','config_id',1);

    function set_login () {
        global $conn_vn;
        if (!isset($_SESSION['user_id_gbvn'])) {
            if (isset($_COOKIE['user_id_trichdan'])) {
                $arr = explode(':', $_COOKIE['user_id_trichdan']);
                $identify = $arr[0];
                $token = $arr[1];
                $sql = "SELECT * FROM user Where remember_me_identify = '$identify' And remember_me_token = '$token'";
                $result = mysqli_query($conn_vn, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['user_id_gbvn'] = $row['id'];
            }
        }
    }
    set_login();

    function check_login () {
        if (!isset($_SESSION['user_id_gbvn'])) {
            if (! ($_GET['page'] == 'dangnhap' || $_GET['page'] == 'dangky' || $_GET['page'] == 'forget-pass') ) {
                echo '<script type="text/javascript">alert(\'Bạn chưa có đăng nhập\'); window.location.href = "/dangnhap";</script>';
            }
        }
    }
    check_login();
    function set_codeSale ($code_sale) {
        if (!isset($_SESSION['code_sale'])) {
            $_SESSION['code_sale'] = $code_sale;
        }
    }
    // set_codeSale($rowConfig['content_home10']);

    function set_cart_type () {
        if (!isset($_SESSION['cart_type'])) {
            $_SESSION['cart_type'] = '1';
        }
    }
    set_cart_type();
    // var_dump($_SESSION);die;
?>

<!doctype html>
<html lang="en">
<head>
    <!-- start - cấu hình cơ bản, dùng chung cho tất cả các website chuẩn seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cần cấu hình linh hoạt -->
    <meta name="description" content="<?= $meta_des ?>">
    <!-- cần cấu hình linh hoạt -->
    <meta name="keywords" content="<?= $meta_key ?>">
    <!-- cần cấu hình linh hoạt -->
    <title><?= $title ?></title>
    <!-- cần cấu hình linh hoạt -->
    <link rel="icon" href="/images/<?= $rowConfig['icon_web'] ?>" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/plugin/fonts/font-awesome/css/font-awesome.min.css">
    <script src="/plugin/jquery/jquery-2.0.2.min.js"></script>
    <script src="/plugin/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="/highlight/styles/default.css">
    <script src="/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- end - cấu hình cơ bản, dùng chung cho tất cả các website chuẩn seo -->


</head>
<?php 
    if ($_GET['page'] == 'show-code1') {
        include_once dirname(__FILE__) . DIR_THEMES . "show_code1.php";
        die;
    }
?>
<body>
    <!--HEADER-->
    <?php include_once dirname(__FILE__).DIR_THEMES."header.php"; ?>

<!--CONTENT-->
<div class="gb-content">
<?php
    if (isset($_GET['page'])){
        
        $urlAnalytic = $action->getTypePage_byUrl($_GET['page'],$lang);    
        // echo $urlAnalytic;//die;
        switch ($urlAnalytic) {
        	case 'newscat_languages':
                include_once dirname(__FILE__).DIR_THEMES."newsCat.php"; break;
            case 'news_languages':               
                include_once dirname(__FILE__).DIR_THEMES."chitiet_tintuc.php"; break;
            case 'servicecat_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "dichvu.php";break;
            case 'service_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "chitiet_dichvu.php";break;
            case 'page_language':
                include_once dirname(__FILE__) . DIR_THEMES . "page.php";break;
    		case 'productcat_languages':              
                include_once dirname(__FILE__).DIR_THEMES."sanpham1.php"; break;
            case 'product_languages':
                include_once dirname(__FILE__).DIR_THEMES."chitiet_sanpham.php"; break;	
            case 'producttag_languages':
                include_once dirname(__FILE__) . DIR_THEMES . "product-tag.php";break;
            case 'list-file':
                include_once dirname(__FILE__) . DIR_THEMES . "list_file.php";break;
            case 'show-code':
                include_once dirname(__FILE__) . DIR_THEMES . "show_code.php";break;
             case 'show-code1':
                include_once dirname(__FILE__) . DIR_THEMES . "show_code1.php";break;
            case 'dangky':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-ky.php";break;
            case 'dangnhap':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-nhap.php";break;
            case 'dangxuat':
                include_once dirname(__FILE__) . DIR_THEMES . "dang-xuat.php";break;
            case 'forget-pass':
                include_once dirname(__FILE__) . DIR_THEMES . "forget-pass.php";break;
            case 'change-password':
                include_once dirname(__FILE__) .DIR_THEMES . "change-password.php";break;
            case 'show-code-theme':
                include_once dirname(__FILE__) . DIR_THEMES . "show-code-theme.php";break;
            case 'show-theme-list':
                include_once dirname(__FILE__) . DIR_THEMES . "show-theme-list.php";break;
            // start - chưa hoàn thiện - url địa chỉ trang website
            case 'gio-hang':               
                include_once dirname(__FILE__).DIR_THEMES."giohang.php"; break;            
            case 'thanh-toan':           
                include_once dirname(__FILE__).DIR_THEMES."cart-payment.php"; break;
            case 'cart-payment':
                include_once dirname(__FILE__) . DIR_THEMES . "cart-payment.php";break;
            case 'xac-nhan-don-hang':           
                include_once dirname(__FILE__).DIR_THEMES."xacnhandonhang.php"; break;
            case 'huy-don-hang':           
                include_once dirname(__FILE__).DIR_THEMES."huydonhang.php"; break;
            case 'lien-he-1':           
                include_once dirname(__FILE__).DIR_THEMES."lienhe.php"; break;
            case 'search-news':
                include_once dirname(__FILE__) . DIR_THEMES . "search-news.php";break;
            case 'search-product':
                include_once dirname(__FILE__) . DIR_THEMES . "search-product.php";break;
            case 'search-service':
                include_once dirname(__FILE__) . DIR_THEMES . "search-service.php";break;
                case 'home2':
                include_once dirname(__FILE__) . DIR_THEMES . "home2.php";break;
            // end - chưa hoàn thiện - url địa chỉ trang website
        }
    }
    else include_once dirname(__FILE__).DIR_THEMES."iconsbox.php";
    ?>
</div>

<!--FOOTER-->
<div class="gb-footer">
    <?php include_once dirname(__FILE__).DIR_THEMES."footer.php"; ?>
</div> 
<script type="text/javascript" src="/functions/language/lang.js"></script>
</body>

</html>