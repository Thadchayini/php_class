<?php
    function sum(){
        echo "This";
    }
     sum(); 

     echo '</br>';
     
     function sum1($x,$y=5){
         echo $x + $y;
     }
     sum1(10);

     echo '</br>';

     function sum2($x,$y=5){
        return $x + $y;
    }
    echo sum2(10);

    echo '</br>';

    $x = 10;
    function test(){
        global $x;
        echo $x;
    }
    test();

    echo '</br>';


    $x = 10;
    function test1(){
        $x = 20;
        echo $x;
    }
    test1();
    echo $x;

    echo '</br>';

    $x = 10;
    function test2(){
        global $x;
         $x = 20;
        echo $x;
    }
    test2();
    echo $x;

    echo '</br>';

    //error
    // function test3(){
    //      $y = 20;
    //     echo $y;
    // }
    // test3();
    // echo $y;

    echo '</br>';

    function test3(){
        global $y;
         $y = 20;
        echo $y;
    }
    test3();
    echo $y;

    // If method is not called we cannot access the y in out side
    // function test3(){
    //     global $y;
    //      $y = 20;
    //     echo $y;
    // }

    echo '</br>';
    

    // reference variable
    function addTwo(&$num){
        $num+=2;
        return $num;

    }
    $x = 10;
    echo addTwo($x);
    echo '</br>';
    echo $x;
    echo '</br>';
    echo addTwo($x);

?>
