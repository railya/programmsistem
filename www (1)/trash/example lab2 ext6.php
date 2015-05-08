<?php

    /**
     * Retruns an array with survey data.
     * Returns an empty array if some data is missed.
     * @return array
     */
    function GetSurveyFromRequest()
    {
	$info = array
	(
	    'first_name' => GetParamFromGet('first_name', ''),
	    'last_name' => GetParamFromGet('last_name', '')
	    //...
	);
	return $info;
    }

    /**
     * @param string $email
     * @return string
     */
    function GetSurveyFilePath($email)
    {
    }

    /**
     * @param array $survey
     */
    function SaveSurveyToFile($survey)
    {
	$path = GetSurveyFilePath($survey['email']);
        //save to file
    }

    $survey = GetSurveyFromRequest();
    if (!empty($survey))
    {
         SaveSurveyToFile($survey);
    }