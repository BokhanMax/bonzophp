<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[7];
$seodescription = $_TXT[8];

require "./views/header.php";

// Page Template
include "./views/pages/about.php";

require "./views/footer.php";
?>