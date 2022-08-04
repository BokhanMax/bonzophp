<?

// config files
require "./core/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_seo_title;
$seodescription = $text_seo_seo_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
include "./theme/pages/seo.tpl";

// footer includes
require "./theme/footer.php";

?>