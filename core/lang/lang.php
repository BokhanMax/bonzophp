<?php
session_start();
if (!isset($_SESSION["lang"])) { $_SESSION["lang"] = "uk"; }
if (isset($_POST["lang"])) { $_SESSION["lang"] = $_POST["lang"]; }

require "lang-common-" . $_SESSION["lang"] . ".php";
require "lang-pages-" . $_SESSION["lang"] . ".php";
require "lang-posts-" . $_SESSION["lang"] . ".php";
require "lang-widgets-" . $_SESSION["lang"] . ".php";
require "lang-seo-" . $_SESSION["lang"] . ".php";
