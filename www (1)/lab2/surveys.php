<?php
    header('Content-Type: text/html; charset=utf-8');
    
    $files = scandir (dirname(__FILE__) . '/data/');
    
    foreach($files as $file) {
        if (is_file(dirname(__FILE__) . '/data/' . $file)) {
            $email = str_replace('.txt', '', $file);
            echo '<a href="survey_info.php?email=' . $email . '">' . $email . '</a><br />';
        }
    }
    