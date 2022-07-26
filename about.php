<?

require "./config/cfg.inc.php";
require "./lang/lang.php";

//SEO 
$seotitle = $_TXT[7];
$seodescription = $_TXT[8];

require "./views/header.php";

// Page Template
include "./views/pages/about.html";

require "./views/footer.php";
?>