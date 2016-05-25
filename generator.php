<?php

// генератор треугольных чисел
function numberGenerator($limit = 15)
{
    for ($i = 0; $i < $limit; $i++){
        yield $i * ($i+1) / 2;
    }
}



foreach (numberGenerator() as $number) {
    echo $number . " ";
}