<!DOCTYPE html>
<html>
    <body>
        <h2>Factorial Calculator</h2>
        <form method="post">
            Enter a number:<input type="number" name="number" required>
            <input type="submit" value="calculate factorial">
        </form>
        <?php
        function calculate_factorial($num)
        {
            if($num=0||$num=1){
                return 1;
            }
            else{
                return $num *calculate_factorial;
                ($num-1);
            }
        }
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $number=$_POST['number'];
            if($number<0)
            {
                echo "<p> please enter a non negative number.</p>";
            }
            $factorial=1;
            for($i=1;$i<=$number;$i++)
            {
            $factorial*=$i;
            }
            {
            return $factorial;
            }
                $result=calculate_factorial($number);
                echo "<p> The factorial of $number is:$result</p>";
            }
        ?>
        </body>
        </html>
        