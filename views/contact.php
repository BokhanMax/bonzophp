<?

// config files
require "./core/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_contact_title;
$seodescription = $text_seo_contact_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
include "./theme/pages/contact.tpl";

// footer includes
require "./theme/footer.php";

?>