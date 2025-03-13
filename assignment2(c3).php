<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison and Manipulation</title>
</head>
<body>

    <h2>String Comparison and Manipulation Form</h2>

    <form method="POST">
        <label for="string1">Enter the first string: </label>
        <input type="text" name="string1" id="string1" required><br><br>

        <label for="string2">Enter the second string: </label>
        <input type="text" name="string2" id="string2" required><br><br>

        <label for="reverse_position">Position from which to reverse characters: </label>
        <input type="number" name="reverse_position" id="reverse_position" min="1" required><br><br>

        <label>Reverse from the position: </label>
        <input type="radio" name="reverse_choice" value="left" checked> Left
        <input type="radio" name="reverse_choice" value="right"> Right<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];
        $reverse_position = $_POST['reverse_position'];
        $reverse_choice = $_POST['reverse_choice'];

        
        $equal_check = ($string1 == $string2) ? "Strings are equal using '=='" : "Strings are not equal using '=='";
        $strcmp_check = (strcmp($string1, $string2) === 0) ? "Strings are equal using 'strcmp()'" : "Strings are not equal using 'strcmp()'";

        
        $appended_string = $string1 . $string2;

        
        $position = $reverse_position - 1; 
        if ($position >= 0 && $position < strlen($string1)) {
            $left_part = substr($string1, 0, $position);
            $right_part = substr($string1, $position);

            if ($reverse_choice == "left") {
                $reversed_right_part = strrev($right_part);
                $modified_string = $left_part . $reversed_right_part;
            } else {
                $reversed_left_part = strrev($left_part);
                $modified_string = $reversed_left_part . $right_part;
            }
        } else {
            $modified_string = "Invalid position for reversal.";
        }

    
        echo "<h3>Results:</h3>";
        echo "<p>$equal_check</p>";
        echo "<p>$strcmp_check</p>";
        echo "<p>Appended String: $appended_string</p>";
        echo "<p>Modified String after Reversal: $modified_string</p>";
    }
    ?>

</body>
</html>
