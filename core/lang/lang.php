<?php
// (C) SET LANGUAGE INTO SESSION
session_start();
if (!isset($_SESSION["lang"])) { $_SESSION["lang"] = "uk"; }
if (isset($_POST["lang"])) { $_SESSION["lang"] = $_POST["lang"]; }
 
// (D) LOAD LANGUAGE FILE
require "lang-" . $_SESSION["lang"] . ".php";
