<?php
function is_account($account)
{
    $partten = "/^[A-Za-z0-9_\.]{8,32}$/";
    if (!preg_match($partten, $account, $matchs)) {
        return false;
    } else {
        return true;
    }
}

function is_password($password)
{
    $partten = "/^([A-Za-z]){1}([\w_\.!@$%^&*()]+){7,32}$/";
    if (!preg_match($partten, $password, $matchs)) {
        return false;
    } else {
        return true;
    }
}
function is_phonemunber($phonemunber)
{
    // $pattern = "/^(03[2|3|4|5|6|7|8|9]{1}|
    // 05[6|8|9]{1}|07[0|6|7|8|9]{1}|08[1|2|3|4|6|8|9]{1}|09[0|1|2|3|4|6|7|8|9]{1})+([0-9]{7})$/";
    $the_first_phone_number_03 = "03[2-9]{1}";
    $the_first_phone_number_05 = "05[6|8|9]{1}";
    $the_first_phone_number_07 = "07[0|6-9]{1}";
    $the_first_phone_number_08 = "08[1-4|6|8|9]{1}";
    $the_first_phone_number_09 = "09[0-4|6-9]{1})([0-9]{7}";
    $pattern = "/^($the_first_phone_number_03|$the_first_phone_number_05|$the_first_phone_number_07|$the_first_phone_number_08|$the_first_phone_number_09)$/";  
    if (preg_match($pattern, $phonemunber, $matchs)) {
        return true;
    } else {
        return false;
    }
    
}
var_dump(is_phonemunber("0761234567"));
// function set_value_input($name)
// {   
//     // func_get_arg();
//     $arg = func_get_args();
//     global $$name;
//     if (!empty($$name[$arg[1]]))
//         return $$name[$arg[1]];
//     // return 0;
// }
function set_value_input($name)
{   
    // func_get_arg();
     $arg = func_get_args();
    global $$name;
    if(isset($$name) && is_array($$name))
    {
        if (!empty($$name[$arg[1]]))
    {
        return $$name[$arg[1]];
    }
   	else 
    {
    	return "";
	}
    }

     else
     {
    	 return $arg[1];
     }
     	  
}
function form_error($name)
{
    global $error;
    if (!empty($name)) {
       return "<p class ='error'>{$name}</p>";
    }
}
?>