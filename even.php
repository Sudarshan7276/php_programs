<form method="post">
    enter a number:<input type="text" name="input"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if($_POST){
    $input=$_POST['input'];
    if($input%2==0)
    echo "is evevn";
else"is odd";
}
?>