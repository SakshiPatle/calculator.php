<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
         Calculator
        </title>
    </head>

    <body>
        <form>
            <input type="text" name="num 1" placeholder="number 1">
            <input type="text" name="num 2" placeholder="number 2">
            <select name="operator">
                <option>None</option>
                <option>Addition</option>
                <option>Substraction</option>
                <option>Multiplication</option>
                <option>Divide</option>

            </select>
            <br>
            <button type="submit" name="submit" value="submit">Caluclate</button>
           
</form>
<p>This answer is:
<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
               echo "You need to select a method";
            break;
            case "Addition":
               echo $result1 + $result2;
            break;
            case "Substraction":
               echo $result1 - $result2;
            break;
            case "Multiplication":
               echo $result1 * $result2;
            break;
            case "Divide":
               echo $result1 / $result2 ;
            break;

        }
    }
?>
</p>


</body>

</html>