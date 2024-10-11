<?php
require_once("const.php");
require_once("functions.php");
require_once("classes/NextMovie.php");

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

render_template('head',$next_movie_data);
render_template('main',array_merge($next_movie_data,
    ["untilMesage" => $next_movie->get_until_message()]
));
render_template('styles');
?>