
<?php
$age = filter_input(INPUT_GET, 'myage', FILTER_VALIDATE_INT);
$txt01 = "Hello, my name is \r\n";
$txt04 = "I am old enough to vote in the United States.";
$txt05 = "I am not old enough to vote in the United States.";
if(isset($_GET['fname'])){
	echo $txt01;
	echo $_GET[ 'fname'];
}

if(isset($_GET['lname'])){
	echo(" ");
	echo $_GET[ 'lname'];
}

if(isset($_GET['myage'])){
	echo nl2br ("\nI am ");
	echo $_GET['myage'];
	echo (" years old and ");
}

if($age>= 18){
	echo nl2br("\n$txt04");
} else {
	echo nl2br("\n$txt05");
}

?>
<!DOCTYPE html>
<html>
<body>
	<form  method="GET" action="GETparametersAssignment.php">
		<div>
			<label>First name: </label>
			<input type = "text" name= "fname"/><br>
 		</div>
			<label> Last name: </label>
			<input type ="text" name="lname"/><br>
		<div>
			<label> Age: </label>
			<input type="text" name="myage"/><br>
 		</div>
			<input type="submit" value="Submit"/>
	</form>
</body>
</html>