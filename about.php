<?

// config files
require "./core/cfg.inc.php";
require "./core/lang/lang.php";

// SEO variables
$seotitle = $text_seo_about_title;
$seodescription = $text_seo_about_decription;

// header includes
require "./views/header.php";
require "./views/nav.php";

// page template include
include "./views/pages/about.tpl";

// footer includes
require "./views/footer.php";

?>