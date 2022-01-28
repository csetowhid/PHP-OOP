<?php
// PHP program to implement
// function overriding

// This is parent class
class P {
	
	// Function geeks of parent class
	function geeks() {
		echo "Parent";
	}
}

// This is child class
class C extends P {
	
	// Overriding geeks method
	function geeks() {
        echo "<br>";
		echo "Child";
	}
}

// Reference type of parent
$p = new P;

// Reference type of child
$c= new C;

// print Parent
$p->geeks();

// Print child
$c->geeks();
?>
