<?

// config files
require "./app/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_webdevel_title;
$seodescription = $text_seo_webdevel_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
include "./theme/pages/webdevel.tpl";

// footer includes
require "./theme/footer.php";

?>