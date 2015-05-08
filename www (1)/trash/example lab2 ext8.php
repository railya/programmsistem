<?php

    function CalcPasswordStrength($password)
    {
        $strength = 0;
        $strength += CalcStrengthForLength($password);
        $strength += CalcStrengthForDigits($password);
        return $strength;
    }

    function CalcStrengthForLength($password)
    {
        return 4 * strlen($password);
    }

    function CalcStrengthForDigits($password)
    {
        //...
        return 0;
    }