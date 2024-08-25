<?php
class Lib_main
{
    // *****************************************************************************
    // Create code using key and last number with 2 key
    // Format KEY1+DATE+KEY2+NUMBER
    // *****************************************************************************
    function code_01($last_number, $key1, $key2, $date_number, $carackter_length = 0)
    {
        $new_number = intval(substr($last_number, strlen($key1))) + 1;
        $new_number_with_zero_num = str_pad($new_number, $carackter_length, "0", STR_PAD_LEFT);
        $kode = $key1 . $date_number . $key2 . $new_number_with_zero_num;
        return $kode;
    }

    public function hash($password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    /************************************************************
                    Filter Data Array using Key
     ************************************************************/
    //Ex: $this->filter_array(array(key=>value), [key, value]))
    public function filter_array($data, $allowed)
    {
        $filtered = array_filter($data, function ($var) use ($allowed) {
            return ($var[$allowed[0]] == $allowed[1]);
        });

        return $filtered;
    }

    /************************************************************
                    Convert String to Integer
     ************************************************************/
    function int($s)
    {
        return (int)preg_replace('/[^\-\d]*(\-?\d*).*/', '$1', $s);
    }

    /************************************************************
                    Convert Currency to Number
     ************************************************************/
    //Ex: $this->int(array('$1.000.000') -> Return 10000000
    function extract_numbers($string)
    {
        return preg_replace("/[^0-9]/", '', $string);
    }
}
