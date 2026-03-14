<?php

namespace MyProject\Instrument;

use MyProject\Instrument;
use MyProject\Traits\TunableTrait;


class StringInstrument extends Instrument
{
    use TunableTrait;


    public function play()
    {
        echo "<p>{$this->name} is being strummed.</p>";
    }
}