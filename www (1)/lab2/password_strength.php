<?php
    $password = isset($_GET['password']) ? $_GET['password'] : '';

    $password = preg_replace ( '/[^a-zA-Z0-9]/', '', $password);
    
    echo CalcPasswordStrength($password);
    
    function CalcPasswordStrength($password)
    {
        $strength = 0;
        $strength += CalcStrengthForLength($password);
        $strength += CalcStrengthForDigits($password);
        $strength += CalcStrengthForUpper($password);
        $strength += CalcStrengthForLower($password);
        $strength -= CalcStrengthOnlyChars($password);
        $strength -= CalcStrengthOnlyDigits($password);
        $strength -= CalcStrengthDupplicates($password);
        
        return $strength;
    }

    function CalcStrengthForLength($password)
    {
        return 4 * strlen($password);
    }

    function CalcStrengthForDigits($password)
    {
        return 4 * strlen(preg_replace('/[^0-9]/', '', $password));
    }
    
    function CalcStrengthForUpper($password)
    {
        return 4 * strlen(preg_replace('/[^A-Z]/', '', $password));
    }
    
    function CalcStrengthForLower($password)
    {
        return 4 * strlen(preg_replace('/[^a-z]/', '', $password));
    }
    
    function CalcStrengthOnlyChars($password)
    {
        if (preg_replace('/[^a-zA-Z]/', '', $password) == $password)
        {
            return strlen($password);
        }
    }
    
    function CalcStrengthOnlyDigits($password)
    {
        if (preg_replace('/[^0-9]/', '', $password) == $password)
        {
            return strlen($password);
        }
    }
    
    function CalcStrengthDupplicates($password)
    {
        $mass = 0;
        $chars_array = count_chars($password);

        if (is_array($chars_array) && count($chars_array) > 0) 
        {  
            foreach($chars_array as $counter)
            {
                if ($counter > 1) 
                {
                    $mass = $counter;
                }
            }  
        }
        return $mass;
    }
    
    