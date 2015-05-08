<?php

    require_once('../include/common.inc.php');
    
    $email = GetParamFromGet("email");
    
    if ($email) 
    {
        $file_name = dirname(__FILE__) . '/data/' . $email . '.txt';

        if (is_file($file_name) && function_exists('file_get_contents')) 
        {
            $data = unserialize(file_get_contents($file_name));
            
            buildLayout2('bootstrap_survey_info.html', $data);
        }
    }
