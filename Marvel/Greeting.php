<?php

namespace Marvel;

class Greeting
{
    use RandomQuote;

    public function say($name = "Guest")
    {
        echo "Hi, {$name}! There is a new quote for you: " . $this->picksQuote();
    }
}