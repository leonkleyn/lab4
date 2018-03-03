<?php
	$count = 0;

	$a1 = $_POST["q1"];
	$a2 = $_POST["q2"];
	$a3 = $_POST["q3"];
	$a4 = $_POST["q4"];
	$a5 = $_POST["q5"];

	$c1 = "McLaren";
	$c2 = "Lorenzo";
	$c3 = "Rally";
	$c4 = "Lauda";
	$c5 = "Reeves";

	echo "Q1: Which Formula 1 team did legendary driver Ayrton Senna drive for the longest?<br>";
	tab(); echo "You answered: " . $a1 . "<br>";
	tab(); check($a1, $c1);
	echo "Q2: Who won the 2015 Moto GP?<br>";
	tab(); echo "You answered: " . $a2 . "<br>";
	tab(); check($a2, $c2);
	echo "Q3: Colin McRae is a well known driver from which motorsport?<br>";
	tab(); echo "You answered: " . $a3 . "<br>";
	tab(); check($a3, $c3);
	echo "Q4: Who did James Hunt have a legendary rivalry with?<br>";
	tab(); echo "You answered: " . $a4 . "<br>";
	tab(); check($a4, $c4);
	echo "Q5: Which famous actor is known for his passion for motorcycles?<br>";
	tab(); echo "You answered: " . $a5 . "<br>";
	tab(); check($a5, $c5);

	echo "You answered $count/5 questions correctly! Your score is " . ($count/5)*100 ."%<br>";

	function check($answer, $name){
		if ($answer == $name){
			global $count;
			$count = $count+1;
			echo "This is the correct answer!<br><br>";
		}
		else {
			echo "The correct answer: $name<br><br>";
		}
	}
	
	function tab(){echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";}	

?>
