<?php

namespace MyProject\Instrument;

/**
 * This class represents a violin.
 * A violin belongs to the string instrument family.
 */
class Violin extends StringInstrument
{
    /**
     * Describes what a violin is.
     */
    public function describe()
    {
        echo "<p>The violin is played with a bow.</p>";
    }
}