<?php

namespace MyProject\Instrument;

/**
 * This class represents a guitar.
 * A guitar belongs to the string instrument family.
 */
class Guitar extends StringInstrument
{
    /**
     * Describes what a guitar is.
     */
    public function describe()
    {
        echo "<p>The guitar is a six-string instrument.</p>";
    }
}