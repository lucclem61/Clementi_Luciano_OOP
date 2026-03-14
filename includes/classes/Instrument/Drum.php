<?php

namespace MyProject\Instrument;


class Drum extends PercussionInstrument
{
    public function describe()
    {
        echo "<p>The drum produces sound when struck.</p>";
    }
}