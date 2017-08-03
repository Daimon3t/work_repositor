<?php

class Calculator
{
    private $one;
    private $two;
    private $save_int;

    public function __construct($one, $two, $save_int = 0)
    {
        $this->one = $one;
        $this->two = $two;
        $this->save_int = $save_int;
    }
    public function result($operator)
    {
        switch($operator) 
        {
            case '+':
                return $this->plus($this->one,$this->two);
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
            case '%':
                return $this->procent($this->one,$this->two);
                break;
        }
    }    
    public function calculate() {
    $data = ['result' => 0, 'memory' => 0];
    if (empty($_POST['send'])) {
        return $data;
    }
    $one = $_POST['field_1'];
    $two = $_POST['field_2'];
    $operator = $_POST['operator'];
    $memory = $_POST['memory'];

    $calcul = new Calculator ($one, $two, $memory);

    switch($_POST['send']) 
    {
        case '=':
            $data['result'] = $calcul->result($operator);
            break;
        case 'M+': 
            $data['result'] = $calcul->m_plus();
            break;
        case 'M-':
            $data['result'] = $calcul->m_minus();
            break;
        case 'MR':
            $data['result'] = $calcul->mr();
            break; 
        case 'MC':
            $data['memory'] = $calcul->mc();
            break;
        case '√':
            $data['result'] = $calcul->sqrt();
            break;
    }
    $data['memory'] = $calcul->memory();
    return $data;
    } 
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
        return $this->save_int = $this->save_int + $this->one;
    }
    public function m_minus ()
    {
        return $this->save_int = $this->save_int - $this->one;
    }
    public function memory ()
    {
        return $this->save_int;
    }
    public function mr ()
    {
        return $this->save_int = $this->one;
    }
    public function mc ()
    {
        return $this->save_int = 0;
    }
    public function procent ()
    {
        $res = $this->one = $this->one * $this->two;
        return $res / 100;
    }
    public function sqrt ()
    {
        return sqrt($this->one);
    }
}



