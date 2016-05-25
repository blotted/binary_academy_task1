<?php

namespace Marvel\Dundee;


class Beast
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}