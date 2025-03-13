<form method="POST">
    enter first number:<input type="number" name="input">
    enter second number:<input type="number" name="input2"><br><br>
    Enter your choice:
    <input type="radio" id="add" name="num" value="add">addition:
    <input type="radio" id="subtract" name="num" value="subtract">subtraction:
    <input type="radio" id="multiply" name="num" value="multiply">multiplication:
    <input type="radio" id="divide" name="num" value="divide">division:
    <input type="radio" id="modulus" name="num" value="modulus">modulus:
    <input type="submit"  name="submit">
</form>
<?php
function calculate($num1,$num2,$operation)
{
    switch($operation)
    {
        case 'add':
            return $num1 + $num2;
        case'subtract':
            return $num1 - $num2;
        case'multiply':
            return $num1 * $num2;
        case 'divide':
            if($num2!=0)
                return $num1 / $num2;
            else
                return 'error: division by zero';
        case'modulus':
            return $num1 % $num2;
    }
    
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $num1 = $_POST["input"];
    $num2 = $_POST["input2"];
    $operation = $_POST["num"];
    $result = calculate($num1,$num2,$operation);
    echo "Result: $result";
}
?>