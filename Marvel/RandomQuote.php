<?php

namespace Marvel;


trait RandomQuote
{
    private $quotations = [
        "Experience is the name every one gives to their mistakes.",
        "Success is not in what you have, but who you are.",
        "Recognition is the greatest motivator.",
        "Illusion is the first of all pleasures.",
        "Objects in the mirror are closer than they appear",
        "Some people give and forgive and some people get and forget…",
        "The time for action is now. It’s never too late to do something."
    ];

    public function picksQuote()
    {
        $rand =  array_rand ( $this->quotations);
        return $this->quotations[$rand];
    }
}