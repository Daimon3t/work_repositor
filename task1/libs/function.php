<?php
$uploaddir = 'C:\OpenServer\domains\MYPHP\upload\\';
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

if (!file_exists($uploaddir)) 
    {
        echo "Папка <b>{$uploaddir}</b> не существует!";
        exit();
    }
    
$arr = array($aFiles);
$aFiles = scandir($uploaddir);
//$get_d = GET[''];
if (isset($_GET['GETdel']))
{
    unlink($uploaddir.$_GET['GETdel']);
}
function file_delete ($f_delete, $get_d)
{
    if (isset($get_d))
    {
        unlink($f_delete);
    }
}

function table_files ($arr, $num = 1)
{
    $skipFiles = ['.', '..'];
    $uploaddir = 'C:\OpenServer\domains\MYPHP\upload\\';
    $table = "<table>";
    $table .= '<tr>
                <th>№</th>
                <th>file name</th>
                <th>size</th>
                <th>delete</th>
                </tr>';
    foreach($arr as $value)
    {
        if (in_array($value, $skipFiles)) {
            continue;
        }
        $filesize = filesize($uploaddir.$value);
        $parametr = 'kb';
        switch ($parametr)
        {
            case 'gb' : $filesize /= 1024;
            case 'mb' : $filesize /= 1024;
            case 'kb' : $filesize /= 1024;
        }
        
        //$f_del = unlink($uploaddir.$value);
        $table .= "<tr>";
        $table .= "<td>" .$num. "</td>";
        $table .= "<td>" .$value. "</td>";
        $table .= "<td>" .$filesize.$parametr. "</td>";
        $table .= "<td><a href='?GETdel=".$value."'>Delete</a></td>";
        //var_dump($_GET['GETdel']);
        $table .= "</tr>";
        $num++;
    }
     $table .= "</table>";   
     return $table;   
}


?>
