<?php
    require_once ("bootStrapHeader.html");
     $radValue = $_POST['r1'];
if ( isset( $_POST['course'])) {
       $inCourse = $_POST['course'];
    }
    // $inCourse = Array(
    //    [0] => CSC1700
    //    [1] => CSC2200
    //    [2] => CSC2650
    //)

    //print("MAde it this far  c=$inCourse");
    require_once ("course_CONFIG.php");
    foreach ( $inCourse as $key => $value  ) {
        if (!isset($course["$value"])) {
            print ("<br/> Hey that is not set incourse=$value");
            exit(1);
        }
        print("<h2> Information about $value </h2>");
        $c = $course["$value"];
        print (" <span style='color:red'> $value: $c </span>");
        //print (" <span style='color:red'> $course[$inCourse] ");
    }
    showMeTheData();

