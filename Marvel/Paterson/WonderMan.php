<?php

namespace Marvel\Paterson;


class WonderMan
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}