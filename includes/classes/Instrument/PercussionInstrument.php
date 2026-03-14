<?php

namespace MyProject\Instrument;

use MyProject\Instrument;


class PercussionInstrument extends Instrument
{

    public function play()
    {
        echo "<p>{$this->name} is being hit.</p>";
    }
}