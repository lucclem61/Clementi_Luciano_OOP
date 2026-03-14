<?php

namespace MyProject\Instrument;

/**
 * This class represents a drum.
 * A drum belongs to the percussion instrument family.
 */
class Drum extends PercussionInstrument
{
    /**
     * Describes what a drum is.
     */
    public function describe()
    {
        echo "<p>The drum produces sound when struck.</p>";
    }
}