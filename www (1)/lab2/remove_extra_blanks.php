<?php
    header('Content-Type: text/html; charset=utf-8');

    if (isset($_GET['text']) && $_GET['text']) 
    {
        $text = $_GET['text'];
        echo trim($text);
    }
      