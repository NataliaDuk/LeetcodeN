<?php

$x = -123;

        if($x<0) {
            $y=-strrev(abs($x));
        } else {
            $y=+strrev($x);
        }
        if (-pow(2,31)<=$y and $y<=(pow(2,31)-1)) {
            echo $y;
        } else {echo 0;}


