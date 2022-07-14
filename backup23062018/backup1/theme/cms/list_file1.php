<?php 
	$path = dirname(__FILE__) . '/../../template/' . $_GET['trang'];
	$files = array_diff(scandir($path), array('.', '..'));
	// echo '<pre>';
	// var_dump($files);
?>
<style type="text/css">
    .list-group-cms .breadcrum-title{
    	margin: 30px 0;
    	border-bottom: 1px solid #ccc;
    }
	.list-group-cms .breadcrum-title li{
		display: inline-block;
		border-right: 1px solid #fff;
	}
	.list-group-cms .breadcrum-title li:last-child{
		border-right: none;
		text-transform: capitalize;
	}
	.list-group-cms .breadcrum-title ul{
	    background: #fcae1d;
	    display: inline-block;
	    min-width: 360px;
	    position: relative;
	    border-left: 4px solid #0c4384;
	}
	.list-group-cms .breadcrum-title ul:after{
		content: '';
		width: 44px;
		height: 44px;
	    background: #fcae1d;
	    position: absolute;
	    transform: skew(45deg);
	        right: -23px;
	}
	.list-group-cms .breadcrum-title li a{
		display: inline-block;
		padding: 15px;
		font-size: 14px;
		color: #fff;
		font-weight: 600;
	}
</style>
<div class="list-group-cms">
	<?php foreach ($files as $item) { ?>
	<div class="container">
		 <!-- class="list-group-cms-item" -->
		 <div class="breadcrum-title">
		 	<ul>
				<li><a href="/show-code/<?= $_GET['trang'] ?>/<?= substr($item, 0, -4) ?>"><?= $item ?></a></li>
				<li><?php echo '<a href="/template/' . $_GET['trang'] . '/' . $item . '" download>download</a>'; ?></li>
			</ul> 	
		 </div>
	</div>

	
	<iframe src="/show-code/<?= $_GET['trang'] ?>/<?= substr($item, 0, -4) ?>" width="90%" height="400"></iframe>
	<?php } ?>
</div>