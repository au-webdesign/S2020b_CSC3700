<?php
class student {
    private $name;
    private $age;
    private $grades;
    public function  __construct($name, $age, $grades) {
        $this->name = $name;
        $this->age = $age;
        $this->grades = $grades;
    }
    public function getName() { return $this->name; }
    public function getAge() { return $this->age; }
    public function getGrades() { return $this->grades; }
}
$students = array();
$students[] = new student('Jack', 22, array(75,90, 100));
$students[] = new student('Jill', 35, array(88,66, 100));
$students[] = new student('Jane', 25, array(66,25,92));
$students[] = new student('John', 26, array(99,100,92));
showAllStudents( $students );

function showAllStudents( $students ) {
   print "\n<ol>";
   foreach ($students as $ct => $s) {
       //print "\n<li> N:$s->name A:$s->age </li>";
       print "\n<li> N:" . $s->getName() . "A:" . $s->getAge() ;
       foreach ( $s->getGrades() as $ct2 => $grade ){
           print " - gr$ct2:$grade  ";
       }
   }
    print "\n<ol>";
 }


