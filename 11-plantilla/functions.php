<?php
declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array{
    //forma reducida de obtener respuesta GET de una API
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match(true){
        $days == 0 => "Hoy se estrena",
        $days == 1 => "Mañana se estrena",
        $days < 7 => "Esta semana se estrana",
        $days <30 => "Este mes se estrena",
        default => "$days dias hasta el estreno"
    };
}
?>