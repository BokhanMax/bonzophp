<?

// config files
require "./app/cfg.inc.php";
require "./app/lang/lang.php";

// SEO variables
$seotitle = $text_seo_about_title;
$seodescription = $text_seo_about_decription;

// header includes
require "./app/theme/header.php";
require "./app/theme/nav.php";

// page template include
include "./app/theme/pages/about.tpl";

// footer includes
require "./app/theme/footer.php";

?>