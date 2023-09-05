<?php
  
// Abstract class
abstract class Base {
    function __construct() {
        echo "this is abstract class constructor ";
    }
  
    // This is abstract function
    abstract function printdata();
}
class Derived extends base {
    function __construct() {
        echo "\n Derived class constructor";
        echo "<br>";
    }
    
    function printdata() {
        echo "\n Derived class printdata function";
    }
}
$b1 = new Derived;
$b1->printdata();
?>