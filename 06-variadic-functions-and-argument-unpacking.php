<?php

class Foo
{
    public function x(...$fooX)
    {
        var_dump($fooX);
    }
}

$f = new Foo;

$f->x(1, 2, 3, 4, new Foo, "aaa");

var_dump($f::class);
var_dump(get_class($f));