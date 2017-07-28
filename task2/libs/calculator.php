<?php

class Calculator
{
    private $one;
    private $two;
    private $save_int;

    public function __construct($one, $two)
    {
        $this->one = $one;
        $this->two = $two;
    }
/*
    public function result($operator)
    {
        case '+':
            return $this->pluse($this->one,$this->two);
            break;
        case '-':
            return $this->minus($this->one,$this->two);
            break;
        case '*':
            return $this->multi($this->one,$this->two);
            break;
        case '/':
            return $this->delenie($this->one,$this->two);
            break;
    }
 */  
    public function plus ()
    {
        return $this->one + $this->two; 
    }
    public function minus ()
    {
        return $this->one - $this->two;
    }
    public function multi ()
    {
        return $this->one * $this->two;
    }
    public function delenie()
    {
        return $this->one / $this->two;
    }
    public function m_plus ()
    {
        if ($this->save_int == 0)
        {
            return $this->save_int = $this->one;
        }
        else {
            return $this->save_int + $this->one;
        }
    }
    public function m_minus ()
    {
        if ($this->save_int != 0)
        {
            return $this->save_int - $this->one;
        }
        else {
            exit;
        }
    }
    public function mr ()
    {
        echo $this->save_int;
    }
    public function mc ()
    {
        $this->save_int = 0;
    }
    public function procent ()
    {
        return $this->one / 100 * $this->two;
    }
    

}



