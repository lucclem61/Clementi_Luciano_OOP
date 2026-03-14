<?php

namespace MyProject;


class Instrument implements Playable
{

    protected string $name;


    protected string $material;


    protected string $origin;


    public function __construct(string $name, string $material, string $origin)
    {
        $this->name = $name;
        $this->material = $material;
        $this->origin = $origin;
    }


    public function play()
    {
        echo "<p>{$this->name} is being played.</p>";
    }


    public function describe()
    {
        echo "<p>{$this->name} is made from {$this->material} and comes from {$this->origin}.</p>";
    }

  
    public function maintain()
    {
        echo "<p>Maintaining the {$this->name}.</p>";
    }
}