<?php

class Singleton
{
    public int $data = 0;

    private static $instance;

    private function __construct(){ }


    public static function getInstance()
    {
        if(! self::$instance)
        {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function doSomethingWithData($number = 0)
    {
        $this->data += $number;
    }

    public function getData()
    {
        echo "Data: ".$this->data." \n";
    }
}


$featureClass = Singleton::getInstance();

$featureClass->doSomethingWithData(4);

$featureClass->getData();  // Outputs 4

$featureClass = Singleton::getInstance();

$featureClass->getData(); // Still outputs 4 because a new instance of class was not created above;