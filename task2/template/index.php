<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

    <?php

        if (isset($_POST['send']))
            {
                $one = $_POST['field_1'];
                $two = $_POST['field_2'];
                $operator = $_POST['operator'];
            }

        $calcul = new Calculator ($one, $two);

        echo $res;
        /*var_dump($calcul->procent($one, $two));*/


        
    
    
    
    ?>


<form action="../libs/calculator.php" method="post">
    <input type="text" name="field_1">
    <select name="operation">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="field_2">
    <input type='submit' name="send" value="Count">
</form>


</body>
</html>