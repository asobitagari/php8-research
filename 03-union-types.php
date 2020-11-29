<?php

class Foo
{
    public string $x;
    public int $y;
}

$f = new Foo;

$f->x = 10000;
$f->y = "5";

echo $f->x . ":" . $f->y . "\n";

// class Foo
// {
//     public string|null $x;
//     public string|int $y;
// }

// $f = new Foo;

// $f->x = null;
// $f->y = "aaa";

// echo $f->x . ":" . $f->y . "\n";

// class Foo
// {
//     public int|Hoge $x;
//     public Hoge|Boo $y;
// }

// class Hoge
// {
//     public function __toString()
//     {
//         return "hoge";
//     }
// }

// class Boo
// {
//     public function __toString()
//     {
//         return "boo";
//     }
// }

// $f = new Foo;
// $f->x = new Boo;
// $f->y = 5;

// echo $f->x . ":" . $f->y . "\n";


