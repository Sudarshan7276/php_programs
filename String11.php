<html>
    <body>
        <h2>reversed string</h2>
        <form method="post">
            Enter a string:<input type="test"
            name="input string" required>
            <input type="submit" value="reversed string">
</form>
<?php
function reverse_string($str)
{
    return strrev(string:$str);
}
if($_SERVER ["REQUEST_METHOD"]=="POST")
{
    $input_string=$_POST['input_string'];
    $reverse_string= reverse_string($input_string);
    echo "<p> The reversed string is:$reverse_string</p>";
}
?>
</body>
</html>