<?php
    class Parcels
    {
            private $dimensions;
            private $weight;

        function __construct($parcel_dimensions, $parcel_weight)
        {
            $this->dimensions = $parcel_dimensions;
            $this->weight = $parcel_weight;
        }

        function getDimensions(){
            return $this->dimensions;
        }
        function getWeight(){
            return $this->weight;
        }

        function volume($dimensions){
            $total = 0;
            foreach ($dimensions as $side) {
                $total + $side = $total;
                return $total;
            }
        }

        function costToShip($dimensions, $weight) {
            $price = $dimensions * $weight;
            return $price;
        }
    }
?>
