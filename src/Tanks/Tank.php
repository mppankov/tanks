<?php

namespace Tanks\Tanks;

use Tanks\TanksComponents\Armor\Armor;
use Tanks\TanksComponents\Chassis\Chassis;
use Tanks\TanksComponents\Towers\Towers;

class Tank
{
    public Armor $armor;
    public Chassis $chassis;
    public Towers $towers;
    public int $health;

    protected function __construct(
        Armor $armor,
        Chassis $chassis,
        Towers $towers,
        int $health)
    {
        $this->armor = $armor;
        $this->chassis = $chassis;
        $this->towers = $towers;
        $this->health  = $health;
    }

    public function toString(): string
    {
        return "Здоровье: {$this->health}\n
                Броня: {$this->armor->toString()}\n
                Шасси: {$this->chassis->toString()}\n
                Башня: {$this->towers->toString()}\n\n";
    }
}