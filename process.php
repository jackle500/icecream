<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ice Cream Order summary</title>
</head>
<body>
<h1>Thank you for your order!</h1>
<?php
var_dump($_POST);
echo "</pre";


//get data form POST array
$scoops = $_POST('scoops');
$flavors = $_POST('flavors');
$flavorsString = implode(", ", $flavors);

//print a summary
    echo "<p>$scoops Scoops</p>";
    echo "<p>Flavors: $flavorsString</p>"

?>
</body>
</html>