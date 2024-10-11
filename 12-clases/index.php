<?php
class SuperHero{
    public function __construct(
        private string $name,
        readonly public array $powers,
        readonly public string $planet
    ){}
            
    public function attack(){
        return "$this->name ataca con sus poderes";
    }

    public function show_all(){
        return get_object_vars($this);
    }

    public function descripcion(){
        $powers = implode(", ",$this->powers);
        
        return "$this->name es un superheroe que viene de $this->planet"
        ." y tiene los siguientes poderes: $powers";
    }

    public static function random(){
        $names = ["Thor","Spiderman","Wolverine","Ironman","Hulk"];
        $powers = [
            ["Superfuerza","Volar","Martillo"],
            ["Telarañas","Escalar","Sentido"],
            ["Regeneracion","Garras","Resistencia"],
            ["Armadura","Rayos Laser","Volar"],
            ["Ira","Superfuerza","Invencibilidad"]
        ];
        $planets = ["Asgard","Tierra","Kripton","HulkWorld"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name,$power,$planet);
    }
}

$hero = new SuperHero("batman",["Superfuerza","rayos laser", "super vision"],"Krypton");
echo $hero->descripcion() . "<br>";
//var_dump($hero->show_all());
$hero2 = SuperHero::random();
echo $hero2->descripcion() . "<br>";
?>