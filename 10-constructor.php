<?php

class Foo
{
    public function Foo ()
    {
        echo "aaaa\n";
    }

    public function __construct()
    {
        echo "bbbb\n";
    }
}

new Foo;