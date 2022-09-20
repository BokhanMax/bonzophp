<?

// config files
require "./core/cfg.inc.php";
require "./lang/lang.php";

// SEO variables
$seotitle = $text_seo_blogpost29072022_title;
$seodescription = $text_seo_blogpost29072022_decription;

// header includes
require "./theme/header.php";
require "./theme/nav.php";

// page template include
$post= file_get_contents('./theme/blog/29072022-'. $_SESSION["lang"] . '.txt', true);
// $post= file_get_contents('./theme/blog/29072022.txt', true);
echo str_replace(array("\r\n", "\r", "\n"), '<br>', $post);

// footer includes
require "./theme/footer.php";

?>