<?php

namespace MyProject\Traits;


trait TunableTrait
{

    public function tune(): string
    {
        return "{$this->name} is being tuned.";
    }
}