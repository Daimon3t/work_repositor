<?php

$File_exists = '';

function file_exis()
{
    if (!file_exists(UPLOADDIR)) 
        {
            return NOFOLDER;
            exit();
        }
}
function get_files()
{
    $skipFiles = ['.', '..'];
    $res = array();
    $aFiles = scandir(UPLOADDIR);
    foreach($aFiles as $filename)
    {
         if (in_array($filename, $skipFiles))
        {
            continue;
        }
        $res[] = array('name' => $filename, 'size' => filesize_b(UPLOADDIR.$filename));
    }
    return $res;
}
function filesize_b($file, $num = 2)
{
    $size = filesize($file);
    $array = array('B','kB','MB','GB');
    $step = 1024;
    $i = 0;
    while (($size / $step) > 0.9)
    {
        $size = $size / $step;
        $i++;
    }
    return round($size, $num).' '.$array[$i];
}

if ($_POST['send-request'])
    {
        if (file_exists(UPLOADDIR.$_FILES['load']['name']))
        {
            $File_exists = $_FILES['load']['name'].' EXISTS!';
        }
    }
function upload ()
{
    if (isset($_POST['send-request']))
    {
        move_uploaded_file($_FILES['load']['tmp_name'], UPLOADDIR.$_FILES['load']['name']);
        return COPY;
    }
}
function file_delete()
{
    if (isset($_GET['name']) && file_exists(UPLOADDIR.$_GET['name']))
    {
        unlink(UPLOADDIR.$_GET['name']);
        return $_GET['name'].DEL;
    }
}
?>
