<?php
    require_once( "student.php");

    $students[] = new student('Jack', 22, array(75,90, 100));
    $students[] = new student('Jill', 35, array(88,66, 100));
    $students[] = new student('Jane', 25, array(66,25,92));
    $students[] = new student('John', 26, array(99,100,92));

    print "<pre>";
    print_r($students);
    print "</pre>";