<?php

class Foo
{
    public function __construct(
        string $x = "xxxx",
        string $y = "yyyy",
        string $z = "zzzz"
    ) 
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

// class Foo
// {
//     public function __construct(
//         public string $x = "xxxx",
//         public string $y = "yyyy",
//         public string $z = "zzzz"
//     ) {}
// }

$f = new Foo;
echo $f->x . " " . $f->y . " " . $f->z . "\n";



// class Hoge
// {
//     public function __construct(
//         public string $x,
//         public string $y,
//         public string $z
//     ) {}
// }

// $h = new Hoge("x", "y", "z");
// echo $h->x . " " . $h->y . " " . $h->z . "\n";
