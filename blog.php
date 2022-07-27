<?

// config files
require "./core/cfg.inc.php";
require "./core/lang/lang.php";

// SEO variables
$seotitle = $text_seo_blog_title;
$seodescription = $text_seo_blog_decription;

// header includes
require "./views/header.php";
require "./views/nav.php";

// page template include
include "./views/pages/blog.tpl.php";

// footer includes
require "./views/footer.php";

?>