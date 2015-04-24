<?php
    header('Content-Type: text/plain');

    $text = isset($_GET['text']) ? $_GET['text'] : '';

    $textArr = explode(" ", $text);
    $rText = '';

    foreach($text_arr as $value)
    {
        if ($value) 
        {
            $rText . = ' ' . $value;
        }
    }

    echo trim($rText);

    //echo trim(preg_replace('/\s{2,}/', ' ', $text));
