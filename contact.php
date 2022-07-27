<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[9];
$seodescription = $_TXT[10];

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/contact.tpl.php";

require "./views/footer.php";
?>