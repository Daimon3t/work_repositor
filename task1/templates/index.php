<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>table</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
 integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container" style="text-align: center;">
    <div class="page-header">
        <h1>Task 1 <small>uploader</small></h1>
    </div>
    <form action="index.php" class="form-inline" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" class="form-control" name="load">
        <input type="submit" class="form-control" name="send-request" value="upload">
        <div class="alert alert-success" role="alert">
        <?php echo $File_exists; echo $file_exis; echo $upload; echo $file_del; ?>
        </div>
    </div>
    </form>

    <table class="table table-bordered">
            <tr>
                <td>№</td>
                <td>File Name</td>
                <td>File Size</td>
                <td>File Delete</td>
            </tr>
            <?php $num = 1; ?>
        <?php foreach($arr as $value): ?>
            <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['size']; ?></td>
                <td><a href="?action=delete&name=<?php echo $value['name']; ?>" >Delete</a></td>
            </tr>
            <?php $num++ ?>
        <?php endforeach; ?>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
 integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
