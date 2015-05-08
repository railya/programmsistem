<?php
    require_once('../include/common.inc.php');
    require_once('../include/tableSin.php');
    
    $degMove = GetDegMoveFromGet("degree");
    $minMove = GetMinMoveFromGet("minute");
    
    $table = TableSin($degMove, $minMove);
     
    $data = array
    (
        'degMove' => $degMove,
        'minMove' => $minMove,
        'table' => $table
    );
    
    buildLayout('survey.html', $data);
    