<?php

namespace Marvel\BraddockManor;


class CaptainBritain
{
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}