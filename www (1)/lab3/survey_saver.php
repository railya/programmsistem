<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once('../include/common.inc.php');
    

    function GetSurveyFromRequest()
    {
	$info = array
	(
	    'first_name' => GetParamFromGet('first_name', ''),
	    'last_name' => GetParamFromGet('last_name', ''),
	    'email' => GetParamFromGet('email', ''),
	    'age' => GetParamFromGet('age', '')
	);
	return $info;
    }

    function GetSurveyFilePath($email)
    {
        return dirname(__FILE__) . '/data/' . $email . '.txt';
    }

    function SaveSurveyToFile($survey)
    {
	$path = GetSurveyFilePath($survey['email']);
        //save to file
        
        $data = serialize($survey);

        if (function_exists('file_put_contents')) 
        {
            file_put_contents($path, $data);
        } else 
        {
            $handle = fopen($path, 'a');
            fwrite($handle, $data);
            fclose($handle);
        } 
    }

    $survey = GetSurveyFromRequest();
    
    if (!empty($survey))
    {
         SaveSurveyToFile($survey);
    }
    
    buildLayout2('bootstrap_form.html', null);
    