<?php
    require_once ("bootstrap_header.html");
    if ( isset( $_POST['course'])) {
       $inCourse = $_POST['course'];
       print("<br /> <pre> "); print_r( $inCourse ); print("</pre>");
       exit;
    }
    print("MAde it this far  c=$inCourse");
    require_once ("course_CONFIG.php");
    if ( !isset( $course["$inCourse"])){
        print ("<br/> Hey that is not set incourse=$inCourse");
        exit(1);
    }
    print("<h2> Information about $inCourse </h2>");
    $c = $course["$inCourse"];
    print (" <span style='color:red'> $inCourse: $c </span>");
    //print (" <span style='color:red'> $course[$inCourse] ");

    showMeTheData();

