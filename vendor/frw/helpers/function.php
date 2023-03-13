<?php

/**
 * @param $data
 * @param $die
 * @return void
 */
function debug($data, $die = false)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
    if ($die) {
        die();
    }
}

/**
 * @param string $str
 * @return string
 */
function h(string $str): string
{
    return htmlspecialchars($str);
}
