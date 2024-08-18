<?php

declare(strict_types=1); // activa el modo estricto para tipos, siempre arriba del todo.

const API_URL = "https://whenisthenextmcufilm.com/api";

function render_template(string $template, array $data = [])
{
    extract($data);
    require "./templates/$template.php";
}

function get_data(string $url): array
{
    $res = file_get_contents($url);
    $data = json_decode($res, true);
    return $data;
}

function get_until_message(int $days): string
{
    $message = match (true) {
        $days == 0   => "Hoy se estrena! 👏",
        $days <  7    => "Quedan menos de una semana! 🫦",
        $days <  15   => "Quedan menos de 15 días 🚀",
        $days <  30   => "Quedan menos de 30 días ⌛",
        default       => "$days días para el estreno 📅"
    };
    return $message;
}
