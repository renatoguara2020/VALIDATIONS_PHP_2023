<?php
            $atual = new DateTime();
            $especifica = new DateTime(' 1990-01-22');
            $texto = new DateTime(' +1 month');

            print_r($atual);
            print_r($especifica);
            print_r($texto);

/* DateTime Object ( [date] => 2015-06-20 19:03:45 [timezone_type] => 3 [timezone] => UTC ) DateTime Object ( [date] => 1990-01-22 00:00:00 [timezone_type] => 3 [timezone] => UTC ) DateTime Object ( [date] => 2015-07-20 19:03:45 [timezone_type] => 3 [timezone] => UTC )
*/