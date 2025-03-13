<html>
    <body>
        <h2>checked string</h2>
        <form method="post">
            Enter a string:<input type="test"
            name="input string" required>
            <input type="submit" value="checked string">
</form>
<?php
function check_string($str)
{
    return check_string(string:$str);
}
if($_SERVER ["REQUEST_METHOD"]=="POST")
{
    $input_string=$_POST['input_string'];
    $check_string= check_string($input_string);
    echo "<p> The checked string is palindrome:$check_string</p>";
}
else
{
    echo "<p> The checked string is not palindrome:$check_string</p>";
}
?>
</body>
</html>
