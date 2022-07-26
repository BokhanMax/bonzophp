<?

require "./config/cfg.inc.php";
require "./lang/lang.php";

//SEO 
$seotitle = $_TXT[9];
$seodescription = $_TXT[10];

require "./views/header.php";

// Page Template
include "./views/pages/contact.html";

require "./views/footer.php";
?>