<?php

class Singleton
{
    private static ?Singleton $instance = null;
    private function __construct() {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

function clientCode(): void
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();
