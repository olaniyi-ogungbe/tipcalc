<html>
<head>
	<style>
		h2{color:black;}
		td{color:red;}
	</style>
	<title>Welcome</title>
</head>
<body>
	<h2>Tip Calculator</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<table border="0">
		<tr>
			<td>Bill:</td>
			<td><input type="text" name="bill" value="0" /></td>
		</tr><tr>
			<td>Tip %:</td>
			<td><input type="text" name="tip" value="0"/> (enter as a whole number)</td>
		</tr><tr>
			<td># of People:</td>
			<td><input type="text" name="people" value="1" /> (enter as a whole number thats > 0)</td>
		</tr><tr>
			<td></td>
			<td><input type="submit" name="calculate" value="Calculate" /></td>
		</tr>
		</table>
	</form>
</body>
</html>
<?php
if(isset($_POST['bill'], $_POST['tip'], $_POST['people'])){
	if(is_numeric($_POST['bill']) && is_numeric($_POST['tip']) && is_numeric($_POST['people'])){
        $bill = $_POST['bill'];
        $tip = $_POST['tip'];
        $people = $_POST['people'];
        $tip = ($tip/100) * $bill;
        $total = $tip + $bill;
        $per_person = $total/$people;
        echo "Your Bill is : ".$bill;
		echo "<br/>Tip amount: ".$tip ;
		echo "<br/>Total: ". $total ;
		echo "<br/>Total per Person: ".$per_person;
	}else echo "At least one of the values was not a number!";
}else echo "At least one of the values was missing!";
?>
