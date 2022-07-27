<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[5];
$seodescription = $_TXT[6];

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/home.tpl.php";

require "./views/footer.php";
?>