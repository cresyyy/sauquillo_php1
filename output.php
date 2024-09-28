<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<?php  
if(isset($_POST["getQuadratic"])) {

	
	$a = $_POST['numA'];
	$b = $_POST['numB'];
    $c = $_POST['numC'];

	
	$discriminant = $b* $b - (4*$a*$c);

	// Print the result
	echo "<h2> {$discriminant} </h2>";
}
?>
</body>
</html>