<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>hey</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
<div>
<form method="get">
    <input id="number1" type="text" name="num1" placeholder="Number 1">
    <input id="number2" type="text" name="num2" placeholder="Number 2">
    <nav id="op">
    <select name="operator">
    <option>None</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
    </select>
    </nav>
    <br>
    <nav>
    <button id="calculate" type="submit" name="submit" value="submit">Calculate</button>
    </nav>
</form>
</div>
<?php
    if(isset($_GET['submit'])){
        $result1 = $_GET["num1"];
        $result2 = $_GET["num2"];
        $operator = $_GET["operator"];
        switch ($operator){
            case "None":
                echo "Select Operator";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Subtract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divide":
                echo $result1 / $result2;
                break;
         }
    }
?>


</body>
