<?php

namespace Marvel\Asgard;


class Thor
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}