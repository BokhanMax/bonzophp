<?

require "./config/cfg.inc.php";
require "./lang/lang.php";

//SEO 
$seotitle = $_TXT[5];
$seodescription = $_TXT[6];

require "./views/header.php";

// Page Template
include "./views/pages/main.html";

require "./views/footer.php";
?>