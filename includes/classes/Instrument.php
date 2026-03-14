<?php

namespace MyProject;

/**
 * This is the parent class for all of the instruments.
 */
class Instrument implements Playable
{
    /**
     * This is the name of the instrument.
     */
    protected string $name;

    /**
     * This is what the instrument is made from.
     */
    protected string $material;

    /**
     * This is where the instrument originally comes from.
     */
    protected string $origin;

    /**
     * This is for when a new instrument is created.
     * It saves the name, what it is made from, and where it comes from.
     */
    public function __construct(string $name, string $material, string $origin)
    {
        $this->name = $name;
        $this->material = $material;
        $this->origin = $origin;
    }

    /**
     * "Plays" the instrument.
     */
    public function play()
    {
        echo "<p>{$this->name} is being played.</p>";
    }

    /**
     * Describes the instrument.
     */
    public function describe()
    {
        echo "<p>{$this->name} is made from {$this->material} and comes from {$this->origin}.</p>";
    }

    /**
     * Shows how to take care of the instrument.
     */
    public function maintain()
    {
        echo "<p>Maintaining the {$this->name}.</p>";
    }
}