<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form> 
        <input type ="text" name ="Num1" placeholder ="Number1">
        <input type ="text" name ="Num2" placeholder ="Number2">

        <select name ="operator">
            <option>Nic</option>
            <option>Sčítání</option>
            <option>Odčítání</option>
            <option>Násobení</option>
            <option>Dělení</option>
        </select>   
        <br>
        <button type ="submit" name ="submit" value ="submit">Calculate</button>

</form>
<p>The answer is: </p>
<?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['Num1'];
    $result2 = $_GET['Num2'];
    $operator = $_GET['operator'];
        switch($operator) {
            case  "Nic":
                echo "ERROR";
                break;
            case  "Sčítání":
                echo $result1 + $result2;
                break;
            case  "Odčítání":
                echo $result1 - $result2;
                break;
            case  "Násobení":
                echo $result1 * $result2;
                break;
            case  "Dělení":
                echo $result1 / $result2;
                break;

    }
}
echo ""
?>
</body>
</html>