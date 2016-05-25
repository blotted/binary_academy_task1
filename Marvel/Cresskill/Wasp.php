<?php

namespace Marvel\Cresskill;


class Wasp
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}