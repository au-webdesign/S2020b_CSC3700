<?php
    $myVar = "Apple";
    $myVar = 'Apple';
    print( "\nThe big red $myVar <br />");
    print( 'The big red $myVar ');

    $var1 = 'Empty';
    if ( isset( $_GET['var'])) {
        $var1 = $_GET['var'];
    }
    if ( $var1 == "Happy") {
        print ("\n<br /> Glad you are happy");
    } else if ( $var1 == "Sad" ) {
        print ("\n<br /> Sorry you are sad");
    } else {
        print ("\n<br /> Why so serious ");
    }
    print("\n<br /> var1:$var1");
    print ("\n<h2> OK On to the next thing </h2>");
    if ( is_numeric($var1)) {
        print ("2 time var1:" . $var1*2 . " OK?");
        // Now on to the loops
        for ( $i=0; $i<$var1; $i++ ){
           print("\n<br /> --- Looping: i=$i");
        }
        $i=0;
        while( $i < 10 ) {
            print("\n<span style='color:red'>");
            print("<br /> --- SECOND Looping: i=$i");
            print("\n</span>");
            $i++;
        }
    }

