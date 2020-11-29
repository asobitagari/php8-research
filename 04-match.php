<?php

$number = 1000;
$str = '';

try {
    $str = match($number) {
        ng() => "ではない",
        ok() => "ここ"
    };
} catch (Throwable $e) {
    var_dump($e);
}

function ok()
{
    return 1000;
}

function ng()
{
    return "1000";
}

echo $str . "\n";