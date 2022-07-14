<?php 
	$path = dirname(__FILE__);
	$files = array_diff(scandir($path), array('.', '..'));
	// echo '<pre>';
	// var_dump($files);
?>
<ul class="list-group">
	<?php foreach ($files as $item) { ?>
	<li class="list-group-item"><a href="/show-code-theme/<?= substr($item, 0, -4) ?>"><?= $item ?></a></li>
	<?php } ?>
</ul>