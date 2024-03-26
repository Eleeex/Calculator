<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1> WELCOME TO MY LITTLE CALCULATOR </h1>
    <form name = "name"  method = "POST">
        <label>1st Number: </label>
        <input type = "text" id="num1" name="num1"></br></br>
        <label>2nd Number: </label>
        <input type = "text" id="num2" name="num2"></br></br>
        <label>3rd Number</label>
        <input type = "text" id="num3" name="num3"></br></br>
        <input type="submit" id="btn1" value="+" name="sum"> 
        <input type="submit" id="btn2" value="-" name="diff"> 
        <input type="submit" id="btn3" value="*" name="prod"> 
        <input type="submit" id="btn4" value="/" name="quo"> 

</br></br></br>

        <?php
    if(isset($_POST['sum']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $result = $num1 + $num2 + $num3;
        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["diff"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $result = $num1 - $num2 - $num3;

        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["prod"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $result = $num1 * $num2 * $num3;

        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["quo"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $result = $num1 / $num2 / $num3;

        echo "<h1>" .$result. "</h1>";
    }

?>
</body>
</html>