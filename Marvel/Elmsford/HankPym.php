<?php
namespace Marvel\Elmsford;


class HankPym
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}