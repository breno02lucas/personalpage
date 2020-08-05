<?php

    date_default_timezone_set('America/Sao_Paulo');

    /*$monthofYear = date("n");
    $dayofMonth = date("d");
    $day = date("w");
    $dayWeek;
    $dasdeAs;*/

    class dia{

        
        public $blsblalsksa;

        function amORpm()
        {
            $hours = date("G:i");
            $wordDay = 0;

            if($hours >= 00 && $hours < 12)
            {
                $wordDay = 'Bom dia';
                echo $wordDay;
            } 
            else if($hours >= 12 &&$hours < 18)
            {
                $wordDay = 'Boa tarde';
                echo $wordDay;
            } 
            else{
                $wordDay = 'Boa noite';
                echo $wordDay;
            }
        }


    }



?>