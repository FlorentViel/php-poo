<?php

interface Definition {
    public function create_log();
    public function process_1();
    public function process_2($arg);
}
abstract class ProductDefinition implements Definition {
    public function __construct($title)
    {
        $this->create_log();
    }
    abstract protected function create_log();
    abstract protected function process_1();
    abstract protected function process_2($arg);
}

class Product extends ProductDefinition {
    protected function create_log()
    {
        # code...
    }
    protected function process_1()
    {
        # code...
    }
    protected function process_2($arg)
    {
        # code...
    }
}


class Product2 extends ProductDefinition {
    protected function create_log()
    {
        # code...
    }
    protected function process_1()
    {
        # code...
    }
    protected function process_2($arg)
    {
        # code...
    }
}
