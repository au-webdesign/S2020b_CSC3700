<?php

    $var = $_GET['VAR'];

    $myList = Array( 10, 20, 30, 15.5, "Happy");
    print( $myList[2]);
    foreach( $myList as  $val ){
        print("\n<br /> val=$val");
    }
    $myList[] = "Day";
    showMeTheArray( $myList );

    $items = Array( "Hammer"=> 5.99,
                     "Pizza" => 10.99,
                      12  => 15,
        "Apples"=> "Red",
                       "Chicago" => "Like Deep Dish");
    $items["Bananas"] = "Yellow";
    $items["Pizza"] = "Yellow";
    $val = $items['Pizza'];
    if ( isset( $items['Pizza'])) { }
    print("<br /> -------------Val=$val");

showMeTheArray( $items );

function showMeTheArray( $list ){
        foreach( $list as $key => $val ) {
            print("\n<br /> -- Inside function key=$key and val=$val");
        }
    }


