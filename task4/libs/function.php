
<?php

class Suid 
{
    public $selected;

    public function __construct()
    {
        mysql_connect(DB_HOST_SQL, DB_LOGIN_SQL, DB_PASS_SQL);
        mysql_select_db(DB_NAME_SQL);
    }
    public function author() 
    {
        $query = "SELECT `key` FROM mytest";
        $result = mysql_query($query);
        if( $result )
        {
            return mysql_fetch_assoc($result);
        }
        return false;
    }
    public function exec ()
    {
        $sql = $this->select($select).$this->from($from);
        $result = mysql_query($sql);
        if( $result )
        {
            return mysql_fetch_assoc($result);
        }
        return false;
    }
    public function select ($select)
    {
        $query = 'SELECT '.`$select`;
        return $this;
    }
    public function from ($from)
    {
        $query .= ' FROM '.$from;
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

?>
