<?php

namespace Marvel;


class Application
{
    use RandomQuote;

    public function run()
    {
        echo $this->picksQuote();
    }
}