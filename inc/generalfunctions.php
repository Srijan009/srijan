<?php 
     function tester($array , $exit = false){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        if($exit){
            exit;
        }
    }