<?php

    class Hotel{
        public $name, $daily, $pool, $bar, $restaurant, $spa;

        function __construct($n0, $n1, $n2, $n3, $n4, $n5){
            $this->name = $n0;
            $this->daily = $n1;
            $this->pool = $n2;
            $this->bar = $n3;
            $this->restaurant = $n4;
            $this->spa = $n5;
        }
    }

?>