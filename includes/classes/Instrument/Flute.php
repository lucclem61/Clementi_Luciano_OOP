<?php

namespace MyProject\Instrument;

/**
 * This class represents a flute.
 * A flute belongs to the wind instrument family.
 */
class Flute extends WindInstrument
{
    /**
     * Describes what a flute is.
     */
    public function describe()
    {
        echo "<p>The flute produces sound using airflow.</p>";
    }
}