<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[13];
$seodescription = $_TXT[14];

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/blog.tpl.php";

require "./views/footer.php";
?>