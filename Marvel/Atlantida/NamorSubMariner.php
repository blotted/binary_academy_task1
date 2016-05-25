<?php

namespace Marvel\Atlantida;


class NamorSubMariner {
    public static function whoami() {
        return "I’m " . basename(__CLASS__) . " from " . basename(__NAMESPACE__);
    }
}