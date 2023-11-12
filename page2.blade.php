<?php
/*
Name: Wan Mohd Nazim Bin Wan Muhamad Saidin
Matric No: 2114261
*/

if($_POST) {
    $countryName = $_POST["countryName"];
    $fahrenheit = $_POST["fahrenheit"];
    $celsius = round(($fahrenheit - 32)*5/9, 2);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <title>Convert Fahrenheit to Celsius</title>
    </head>
    <body align="center" style="background-color: #BF211E">
        <h1>Fahrenheit to Celsius Converter</h1>
        <form action="" method="post">
            <label for="countryName">Country Name:</label>
            <input type="text" id="countryName" name="countryName" required><br><br>
            <label for="fahrenheit">Fahrenheit Input:</label>
            <input type="number" id="fahrenheit" name="fahrenheit" required><br><br>
            <input type="submit" value="Convert" style="background-color: #40E0D0"> 
            <?php
            if(isset($celsius)) {
                echo "<br> <br> A country of $countryName is currently $celsius degree Celsius.";
            }
            ?>
        </form>
    </body>
</html>