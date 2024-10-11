<?php
require_once("const.php");
require_once("functions.php");

$data = get_data(API_URL);
$untilMesage = get_until_message($data["days_until"]);

render_template('head',$data);
render_template('main',array_merge($data,["untilMesage" => $untilMesage]));
render_template('styles');
?>