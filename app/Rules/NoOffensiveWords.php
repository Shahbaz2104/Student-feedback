<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoOffensiveWords implements ValidationRule
{
    protected $offensiveWords = ['stupid', 'boring', 'hate', 'idiot', 'dumb'];

    // Replace passes() and message() with validate()
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        foreach ($this->offensiveWords as $word) {
            if (stripos($value, $word) !== false) {
                $fail('The :attribute contains inappropriate language.');
            }
        }
    }
}