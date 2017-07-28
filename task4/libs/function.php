
<?php

class Suid 
{

    public $result_db = '';
    public $array = '';
 
    public function __construct()
    {
        mysql_connect(DB_HOST, DB_LOGIN, DB_PASS);
        mysql_select_db(DB_NAME);
    }

    public function author() 
{
	$query = "SELECT id,author FROM authors";
	$result = mysql_query($query);
    return $this;

}

    public function select ($select)
    {
        $query = 'SELECT '.$select;
        return $this;
    }
    public function from ($from)
    {
        $query = 'FROM'.$from;
        return $this;
    }
    public function where ($where)
    {
        'WHERE '.$this->where;
        return $this;
    }
    public function total ()
    {
        mysql_query($this->select().$this->from());
        return $this->array;
    }
}

class Mysql extends Suid
{

}
class Pgsql extends Suid
{

}
/*
$conn = new Suid;

$conn->dbConnect();

$conn->select('*')->from('MY_TEST')->total();




$db = mysql_connect('user1','user1','tuser1');
mysql_select_db('MY_TEST',$db);


$result = mysql_query('SELECT * FROM MY_TEST',$db);
*/






?>
