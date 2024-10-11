<?php
require_once("const.php");
require_once("functions.php");

$data = get_data(API_URL);
$untilMesage = get_until_message($data["days_until"]);

require("sections/head.php");
require("sections/main.php");
require("sections/styles.php");
?>