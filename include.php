<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once("{$path}/common.php");
$NC_PATH = '/ncube';

//header
include_once('./html/include/header.php');

//contents
include_once("./html/main.php");
include_once("./html/story.php");
include_once("./html/philosophy.php");
include_once("./html/ecosystem.php");
include_once("./html/vision.php");
include_once("./html/contact.php");

//footer
include_once('./html/include/footer.php');