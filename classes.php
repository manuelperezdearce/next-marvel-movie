<?php

declare(strict_types=1);

class SuperHero //plantila para crear un superhéroe
{
    // Constructor -> Promoted Properties
    public function __construct(
        private string $name,
        private array $powers,
        private string $planet,
    ) {}

    // Métodos de instancia
    public function attack()
    {
        return "$this ->name ataca con sus poderes!";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers); // transforma un array en string

        return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }

    // Métodos estáticos

    static function random_hero()
    {
        $names = ["Ironman", "Thor", "Superman", "Batman"];
        $powers = [
            ["Fuerza", "Velocidad", "Tecnología"],
            ["Inteligencia", "Fuerza"],
            ["Poderes", "Láser"]
        ];
        $planets = ["Tierra", "Plutón", "Marte"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}


$hero = SuperHero::random_hero();
echo $hero->description();
