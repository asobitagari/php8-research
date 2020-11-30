<?php

// Named Arguments

var_dump(array_fill(0, 5, "aaaa"));
var_dump(array_fill(value: "bbbb", start_index: 0, count: 5));

// $input = array("a", "b", "c", "d", "e");
// print_r(array_slice($input, 2, -1));
// print_r(array_slice($input, 2, -1, true));

// print_r(array_slice($input, 2, preserve_keys: true));

// function zackyLab(
//     string $name1, 
//     string $name2 = 'zacky', 
//     string $name3 = 'lab')
// {
//     echo $name1 . " " . $name2 . " " . $name3 . "\n";
// }

// zackyLab("aaaa", name3: "moge");