<?

// config files
require "./app/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_home_title;
$seodescription = $text_seo_home_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
include "./theme/pages/home.tpl";

// footer includes
require "./theme/footer.php";

?>