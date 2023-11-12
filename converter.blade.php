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
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #BF211E;
            color: white;
        }
        .container {
            text-align: center;
            margin-top: -25px;
        }
        form {
            margin-top: 20px;
        }
        #button {
            background-color: #40E0D0;
            border-radius: 7px;
            height: 30px;
            width: 100px;
        }
        #button:hover {
            background-color: #E89C1E;
            color: white;
        }
        #countryName {
            border-radius: 7px;
            background-color: rgb(192, 190, 190);
        }
        #fahrenheit {
            border-radius: 7px;
            background-color: rgb(192, 190, 190);
        }
        img {
            height: 128px; 
            width: 128px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fahrenheit to Celsius Converter</h1>
        <form action="" method="post">
            <label for="countryName">Country Name:</label>
            <input type="text" id="countryName" name="countryName" required><br><br>
            <label for="fahrenheit">Fahrenheit Input:</label>
            <input type="number" id="fahrenheit" name="fahrenheit" required><br><br>
            <input type="submit" id="button" value="Convert"> 
            <?php
            if(isset($celsius)) {
                echo "<br> <br> <h3>A country of $countryName is currently $celsius degree Celsius.</h3>";
            }
            ?>
        </form>
    </div>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVnNnLmaRG5B7jXMEZbvPJuFpZeaSwKKxk7Q&usqp=CAU" alt="temperature icon">
</body>
</html>
