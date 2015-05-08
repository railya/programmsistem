<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once('../include/common.inc.php');
    
    $files = scandir (dirname(__FILE__) . '/data/');
    
    $data = array(
        'users' => array()
    );
    
    foreach($files as $file) {
        if (is_file(dirname(__FILE__) . '/data/' . $file)) {
            $email = str_replace('.txt', '', $file);
            $data['users'][] = $email;
        }
    }
    
    buildLayout2('bootstrap_surveys.html', $data);
    