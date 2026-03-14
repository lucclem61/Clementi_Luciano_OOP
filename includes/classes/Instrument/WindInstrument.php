<?php

namespace MyProject\Instrument;

use MyProject\Instrument;

/**
 * This class represents the wind instruments.
 * It extends from the main instrument class.
 */
class WindInstrument extends Instrument
{
    /**
     * Plays the instrument by blowing air through it.
     */
    public function play()
    {
        echo "<p>{$this->name} is being blown.</p>";
    }
}