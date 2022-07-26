<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[5];
$seodescription = $_TXT[6];

require "./views/header.php";

// Page Template
include "./views/pages/main.php";

require "./views/footer.php";
?>