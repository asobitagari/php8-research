<?php

class Foo
{
    public ?Boo $x;
}

class Boo
{
    public function xxx()
    {
        return "aaaaa";
    }
}

$foo = new Foo;
$foo->x = null;

echo "zzzzz\n";
echo $foo->x?->xxx() . "\n";
echo "zzzzz\n";
