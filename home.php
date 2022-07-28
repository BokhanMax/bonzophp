<?

// config files
require "./app/cfg.inc.php";
require "./app/lang/lang.php";

// SEO variables
$seotitle = $text_seo_home_title;
$seodescription = $text_seo_home_decription;

// header includes
require "./app/theme/header.php";
require "./app/theme/nav.php";

// page template include
include "./app/theme/pages/home.tpl";

// footer includes
require "./app/theme/footer.php";

?>