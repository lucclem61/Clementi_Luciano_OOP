<?php

namespace MyProject\Traits;

/**
 * This trait adds a tuning function to any relevant instrument class.
 */
trait TunableTrait
{
    /**
     * States when the instrument is being tuned.
     */
    public function tune(): string
    {
        return "{$this->name} is being tuned.";
    }
}