
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation Form</title>
</head>
<body>
    <form method="POST" action="email.php">
        <label for="email">Enter your Email:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit">Submit</button>
    </form>
    <?php

function validateEmail($email) {
    
    $emailParts = explode('@', $email);
    if (count($emailParts) !== 2) {
        return "Invalid email: There should be exactly one '@' symbol.";
    }

    $localPart = $emailParts[0]; 
    $domainPart = $emailParts[1];
    
    if (preg_match('/^[0-9_\.@]/', $localPart)) {
        return "Invalid email: Local part cannot begin with a number, underscore, dot, or @ symbol.";
    }


    if (substr_count($domainPart, '.') < 1 || substr_count($domainPart, '.') > 2) {
        return "Invalid email: Domain part should have at least one and at most two dots.";
    }


    
    
    return "Valid email!";
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    echo validateEmail($email);
}
?>
</body>
</html>
