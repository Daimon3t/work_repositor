<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>table</title>
</head>
<body>

    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="load">
    <input type="submit" name="send-request" value="upload">
    </form>

<?php

$rsfdsg = 'C:\OpenServer\domains\MYPHP\upload\\';

if (isset($_POST['send-request']))
    {
            //var_dump($_FILES['load']['name']);
            move_uploaded_file($_FILES['load']['tmp_name'],
            $rsfdsg.$_FILES['load']['name']);
    }
?>








<?//var_dump($_POST);?>
</body>
</html>
