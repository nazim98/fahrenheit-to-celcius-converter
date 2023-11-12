<?php
/*
Matric No: <Your Matric No>
Name: <Your Name>
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $countryName = $_POST["countryName"];
    $fahrenheitInput = $_POST["fahrenheitInput"];
    $celsius = round(($fahrenheitInput - 32) * 5 / 9, 2);
    echo "A country of $countryName is currently $celsius degree Celsius.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius Converter</title>
</head>

<body>
    <h1>Fahrenheit to Celsius Converter</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="countryName">Country Name:</label>
        <input type="text" id="countryName" name="countryName" required><br><br>
        <label for="fahrenheitInput">Fahrenheit Input:</label>
        <input type="number" id="fahrenheitInput" name="fahrenheitInput" required><br><br>
        <input type="submit" value="Convert">
    </form>
</body>

</html>
