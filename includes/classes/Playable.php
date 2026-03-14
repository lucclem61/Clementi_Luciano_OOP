<?php

namespace MyProject;

/**
 * This interface defines actions that every playable instrument must have.
 * When a class uses this interface it must include play() and describe().
 */
interface Playable
{
    /**
     * Plays the instrument.
     */
    public function play();

    /**
     * Describes the instrument.
     */
    public function describe();
}