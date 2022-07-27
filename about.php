<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO vars
$seotitle = $text_seo_about_title;
$seodescription = $text_seo_about_decription;

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/about.tpl.php";

require "./views/footer.php";
?>