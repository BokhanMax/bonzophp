<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO 
$seotitle = $_TXT[13];
$seodescription = $_TXT[14];

require "./views/header.php";

// Page Template
include "./views/pages/blog.php";

require "./views/footer.php";
?>