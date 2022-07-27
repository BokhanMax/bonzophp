<?

require "./core/cfg.inc.php";
require "./core/lang/lang.php";

//SEO vars
$seotitle = $text_seo_contact_title;
$seodescription = $text_seo_contact_decription;

require "./views/header.php";
require "./views/nav.php";

// Page Template
include "./views/pages/contact.tpl.php";

require "./views/footer.php";
?>