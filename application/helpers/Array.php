<?php

function random_element($array)
{
    return is_array($array) ? $array[array_rand($array)] : $array;
}