<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO vars
$seotitle = $text_seo_home_title;
$seodescription = $text_seo_home_decription;

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/home.tpl.php";

require "./views/footer.php";
?>