<?php

namespace Validation\Rules;

class Required extends AbstractRule
{
    protected $message = '%s is required';

    public function isValid(): bool
    {
        $value = $this->getValue();

        return null !== $value && '' !== $value;
    }
}
