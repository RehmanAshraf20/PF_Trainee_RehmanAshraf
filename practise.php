<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['sub']))
    {
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
	{	
        $ans=$num1+$num2;
        echo "<h2>Your Input:</h2>";
		echo $ans;
    }
    elseif($oprnd=="-")
	{	
        $ans=$num1-$num2;
        echo "<h2>Your Input:</h2>";
		echo $ans;
    }
     else if($oprnd=="x")
	{
        $ans=$num1*$num2;
        echo "<h2>Your Input:</h2>";
		echo $ans;
    }
    
    else if($oprnd=="/")
    {
	    $ans=$num1/$num2;
        echo "<h2>Your Input:</h2>";
		echo $ans;
    }
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Simple Calculator</h1><br>
    First Number:<input name="n1" value=""><br>
    Second Number:<input name="n2" value=""><br>
    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="x">
    <input type="submit" name="sub" value="/"><br>
    <br>Result: <input type='text' value=""><br>
    </form>    
</body>
</html>
