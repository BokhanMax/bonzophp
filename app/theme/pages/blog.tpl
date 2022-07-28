<main>

<?php
$filepath = dirname(__FILE__).'../../posts/';
$files = scandir($filepath);
foreach ($files as $file) {
	if (substr($file,-4,4) == '.tpl') {include($filepath.$file);}
	}
?>

</main>