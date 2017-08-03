<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container" style="text-align: center; padding: 20px;">
<div class="page-header">
  <h1>Calculator! <small>Use it</small></h1>
</div>
    <form action="index.php" method="post">
        <input class="btn btn-default" style="padding: 20px; margin: 10px;" type='submit' name="send" value="MC">
        <input class="btn btn-default" style="padding: 20px; margin: 10px;" type='submit' name="send" value="MR">
        <input class="btn btn-default" style="padding: 20px; margin: 10px;" type='submit' name="send" value="M+">
        <input class="btn btn-default" style="padding: 20px; margin: 10px;" type='submit' name="send" value="M-">
        <input class="btn btn-default" style="padding: 20px; margin: 10px;" type='submit' name="send" value="√"><br>
        <?php if($_POST['send'] == 'MR'): ?>
            <input type="text" name="field_1" value="<?php echo $memory; ?>">
        <?php else: ?>
            <input type="text" name="field_1" value="<?php echo $result; ?>">
        <?php endif; ?>
        <select name="operator" style="font-size: 20px;">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="field_2">
        <input type="hidden" name="result" value="<?=$result;?>">
        <input type="hidden" name="memory" value="<?=$memory;?>">
        <input class="btn btn-default" type='submit' name="send" value="=">
        
    </form>
    <span style="font-size:30px;">Result: <?php echo $result; ?></span></br>
    <span style="font-size:20px;">Memory: <?php echo $memory; ?></span>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>