<?php

    function GetParamFromGet ($paramName, $dafaultvalue = '')
    {
        $result = $defaultValue;

        if (isset($_GET[$paramName]))    
        {
            $result= $_GET[$paramName];
        }
        return $result;
    }
