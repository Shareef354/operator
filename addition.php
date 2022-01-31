<!DOCTYPE html>
<html lang="en">

<title>operator</title>
	<!-- <link rel="stylesheet" href="operator.php"> -->
<body>

<form method = "POST">
    <input type="number" name="number_one" step = "0.001" placeholder="Enter first number">Number 1:</input><br>
    <button name = "+">+</button> <br>
    <input type="number" name="number_two" step = "0.001" placeholder="Enter second number">Number 2:</input><br>
    <button type="submit"  href="process.php" name = "sum">Sum</button>

    <?php
if(isset($_POST['sum'])){
    $num_one = $_POST['number_one'];
    $number_two = $_POST['number_two'];

    $sum = $num_one + $number_two;
    echo "<br>";
    echo $sum;
}

?>
</form>
</body>
</html>
