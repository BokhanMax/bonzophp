<?php

require_once("./core/router.php");

// Static Pages
any('/', 'views/home.php');
any('/about','views/about.php');
any('/services/webdevelopment','views/webdevelopment.php');
any('/services/seo','views/seo.php');
any('/blog','views/blog.php');
any('/contact','views/contact.php');

// Blog posts
any('/blog/welcomepost','views/blog/29072022.php');

// Service/Error Page
any('/404','views/404.php');