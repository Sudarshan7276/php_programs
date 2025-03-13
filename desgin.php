<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $itemsData = $_POST['items'];

    
    $items = explode("\n", $itemsData);
    $bill = []; 

    foreach ($items as $item) {
        $itemDetails = explode(",", $item);
        if (count($itemDetails) == 4) {
            $bill[] = [
                'code' => $itemDetails[0],
                'name' => $itemDetails[1],
                'units_sold' => $itemDetails[2],
                'rate' => $itemDetails[3],
                'total' => $itemDetails[2] * $itemDetails[3]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Billing Form</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Enter Item Details</h2>
<form method="post" action="">
    <label for="items">Enter Item Details (Item Code, Item Name, Units Sold, Rate):</label><br>
    <textarea id="items" name="items" rows="10" cols="50"></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<?php

if (isset($bill) && !empty($bill)) {
    echo "<h3>Bill Details:</h3>";
    echo "<table>";
    echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";

    foreach ($bill as $item) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($item['code']) . "</td>";
        echo "<td>" . htmlspecialchars($item['name']) . "</td>";
        echo "<td>" . htmlspecialchars($item['units_sold']) . "</td>";
        echo "<td>" . htmlspecialchars($item['rate']) . "</td>";
        echo "<td>" . number_format($item['total'], 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
