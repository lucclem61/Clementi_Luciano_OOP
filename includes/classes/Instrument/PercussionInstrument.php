<?php

namespace MyProject\Instrument;

use MyProject\Instrument;

/**
 * This class represents percussion instruments.
 * It extends from the main instrument class.
 */
class PercussionInstrument extends Instrument
{
    /**
     * Plays the instrument by hitting it.
     */
    public function play()
    {
        echo "<p>{$this->name} is being hit.</p>";
    }
}