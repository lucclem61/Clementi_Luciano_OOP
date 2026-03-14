<?php

namespace MyProject\Instrument;

use MyProject\Instrument;

class WindInstrument extends Instrument
{
    public function play()
    {
        echo "<p>{$this->name} is being blown.</p>";
    }
}