<?php

trait t1
{
    public function x()
    {
        echo "t1x\n";
    }
}

trait t2
{
    public function x()
    {
        echo "t2x\n";
    }
}

class TraitTest
{
    use t1, t2 {
        x as xx;
    }

    public function x()
    {
        echo "TraitTest\n";
    }
}

$t = new TraitTest;

$t->x();
$t->xx();
