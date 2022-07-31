<?php

require_once("./core/router.php");

any('/', 'views/home.php');
any('/blog','views/blog.php');
any('/about','views/about.php');
any('/contact','views/contact.php');
any('/services/webdevelopment','views/webdevelopment.php');
any('/blog/welcomepost','views/blog/welcomepost.php');

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index

// get('/', 'views/index.php');

// Dynamic GET. Example with 1 variable
// The $id will be available in user.php

// get('/user/$id', 'user.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php

// get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php

// get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder

// get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

