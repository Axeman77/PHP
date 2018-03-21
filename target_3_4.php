<?php


// Задание № 3 и № 4

function mult ( $a, $b ) {

    return ($a * $b);
};

function dev ( $a, $b ) {

    return ($a / $b);
};

function sum ( $a, $b ) {

    return ($a + $b);
};

function sub ( $a, $b ) {

    return ($a - $b);
};

echo mult(5,10);
echo '; <br>';
echo dev(10,5);
echo '; <br>';
echo sum(100,30);
echo '; <br>';
echo sub(25,5);
echo '; <br>';

function mathOperation ( $a, $b, $operation ) {
    switch ( $operation ) {
        case "mult":
            return mult ( $a, $b );
            break;
        case "dev":
            return dev ( $a, $b );
            break;
        case "sum":
            return sum ( $a, $b );
            break;
        case "sub":
            return sub ( $a, $b );
            break;
    };
};

echo mathOperation (100,10, mult);
echo '; <br>';
echo mathOperation (100,10, dev);
echo '; <br>';
echo mathOperation (100,10, sum);
echo '; <br>';
echo mathOperation (100,10, sub);


?>;