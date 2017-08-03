<?php

class ReaderFile
{

    public function get_String ($string)
    {
        $array_text = file(FILE_FOR_READ);
        return $array_text[$string];
    }
    public function get_Strings ()
    {
        $strings;
        $str = 0;
        while ($this->get_String($str))
        {
            $strings .= $this->get_String($str);
            $strings .= "<br>";
            $str++;
        }
        return $strings;
    }
    public function get_Symbol ($string, $symbol)
    {
        $array_text = file(FILE_FOR_READ);
        return $array_text[$string][$symbol];
    }
    public function get_Symbols ()
    {
        $strings_and_symbols;
        $string = 0;
        
        while ($this->get_Symbol($string, 0))
        {
            $symbol = 0;
            while ($this->get_Symbol($string, $symbol))
            {
                $strings_and_symbols .= $this->get_Symbol($string, $symbol);
                $symbol++;
            }
            $strings_and_symbols .= "<br>";
            $string++;
        }
        return $strings_and_symbols;
    }
    public function changed_string($num_string, $new_value)
    {
        $array_text = file(FILE_FOR_READ);
        $array_text[$num_string] = $new_value.PHP_EOL;
        file_put_contents(FILE_FOR_READ, join('', $array_text));
        return $array_text[$num_string];
    }
    public function changed_symbol($num_string, $num_symbol, $new_value)
    {
        $res_new_symbol = substr_replace($this->get_String($num_string), $new_value, $num_symbol, 1);
        $array_text = file(FILE_FOR_READ);
        $array_text[$num_string] = $res_new_symbol;
        file_put_contents(FILE_FOR_READ, join($array_text));
        return $array_text[$num_string][$num_symbol];
    }

}


?>
