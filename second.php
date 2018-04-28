<?php

if(isset($_POST['submit'])){ //if they pressed submit

	$loan = $_REQUEST['loan'];

	$dateinput = $_REQUEST['date'];  //stores inputs to variables

	$installment = $_REQUEST['installment'];

	$rate = $_REQUEST['rate'];
	$rate = $rate/100; //calculates rate in percentage


	$interval = $_REQUEST['interval'];

	$amount = $loan + ($loan * $rate); 
	//calculates amount needed to be paid

	$date = new DateTime($dateinput); 
	//creates DateTime object with the parameter being the date from the input
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/ animate.min.css">
</head>
<body>
<div class="container outer">

<table class="table table-striped table-hover container" border="2">

<tr>
<th>Payment Date</th>
<th>Payment Remaining</th>
</tr>
<?php 

if($interval == 'Daily'){             // if they picked daily

 while($amount>0){     //while there is still money to be paid  

  $amount = $amount - $installment; // simulates payment

  if($amount > 0){    // if still money left to be paid
 	echo "<tr>";
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>$" . $amount ."</td>";       
	echo "</tr>";        //outputs date and amount left to be paid

	$date->add(new DateInterval('P1D')); //increases date by 1 day
   }	
   else{
   	echo "<tr>";          //otherwise if everything is paid
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>0</td>";
	echo "</tr>";  //outputs date and no money left to be paid
   }
	
  }
   echo "<h1> Estimated Payoff date: </h1>"; 
   echo "<h2> ". $date->format('m-d-Y')."</h2>"; //outputs the date that the last payment was on
}


if($interval == 'Weekly'){ //same logic but for weekly
 while($amount>0){
  $amount = $amount - $installment;
  if($amount > 0){
 	echo "<tr>";
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>$" . $amount ."</td>";
	echo "</tr>";
	$date->add(new DateInterval('P1W')); //here increases by 1 week
   }	
   else{
   	echo "<tr>";
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>0</td>";
	echo "</tr>";
   }
	
  }
   echo "<h1> Estimated Payoff date: </h1>"; 
   echo "<h2> ". $date->format('m-d-Y')."</h2>";
}


if($interval == 'Monthly'){ //same logic but for monthly
 while($amount>0){
  $amount = $amount - $installment;
  if($amount > 0){
 	echo "<tr>";
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>$" . $amount ."</td>";
	echo "</tr>";
	$date->add(new DateInterval('P1M')); 
	//here increases date by 1 month
   }	
   else{
   	echo "<tr>";
	echo "<td>" . $date->format('m-d-Y') ."</td>";
	echo "<td>0</td>";
	echo "</tr>";
   }
	
  }
  echo "<h1> Estimated Payoff date: </h1>"; 
   echo "<h2> ". $date->format('m-d-Y')."</h2>";
}



?>
</table>
<a href="test.php"><button class="btn btn-default submit">Go Back</button></a>
</div>
</body>
</html>
