<?php

namespace MyProject\Instrument;

use MyProject\Instrument;
use MyProject\Traits\TunableTrait;

/**
 * This class represents the string instruments.
 * It extends from the main instrument class.
 */
class StringInstrument extends Instrument
{
    /**
     * Allows string instruments to be tuned.
     */
    use TunableTrait;

    /**
     * Plays the instrument by strumming it.
     */
    public function play()
    {
        echo "<p>{$this->name} is being strummed.</p>";
    }
}