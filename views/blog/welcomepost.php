<?

// config files
require "./core/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_blog_title;
$seodescription = $text_seo_blog_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
include "./theme/posts/welcomepost.tpl";

// footer includes
require "./theme/footer.php";

?>