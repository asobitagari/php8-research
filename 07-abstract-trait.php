<?php

trait FooFoo
{
    public abstract function moge();

    // private abstract function hoge();
}

class BooBoo
{
    use FooFoo;

    public function moge()
    {

    }

    // private function hoge()
    // {

    // }
}

$b = new BooBoo;