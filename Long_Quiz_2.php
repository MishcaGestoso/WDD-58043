<html>
<head><title>Gestoso_Long Quiz 2</title></head>

<?php

$Salary_Rate = 600;
$salary = $Salary_Rate*15;
$Taxable_Amount = $salary*0.30;
$Net_Pay = $salary - $Taxable_Amount;

echo "<i>"."Problem 1: Create a PHP program that will perform the following mathematical operations, to produce the required output."."</i>";
echo "<br><br>"."<b>"."Salary_Rate (per day):  "."</b>".$Salary_Rate;
echo "<br>"."<b>"."Salary (15days):  "."</b>".$salary;
echo "<br>"."<b>"."Taxable_Amount (30% of salary):  "."</b>".$Taxable_Amount;
echo "<br>"."<b>"."Net_Pay:  "."</b>".$Net_Pay;


$counter = 1;
$sum = 0;
$number = 0;

echo"<br><br>";
echo"<i>"."Problem 2. Create a PHP program that will add all positive integers from 1-50 using loop statement."."</i>";
echo $number;
while($counter < 51)
	{
	echo"<br><br>";
	echo "Add:  ".$number."+".$counter."<br>";
	$number = $number+$counter;
	$counter++;
	echo "Sum:  ".$number."<br>";
	}
?>

</html>