<?php

namespace Marvel\LongIsland;


class IronMan
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}