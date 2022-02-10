<?php
$startDir = __DIR__;
$level = 0;


function recursScanDir($dir,$level){
    $iconDir = "__";
    $iconFail = "_";
    $items = scandir($dir);
    foreach ($items as $item){
        if ($item != '.' && $item != '..') {
            $fullPath = $dir.'/'.$item;
            $iconLevel = "";
            for($i=0;$i<=$level; $i++){
                $iconLevel.= "&nbsp;";
            }
            if (is_dir($fullPath)) {

                echo $iconLevel. $iconDir. $item.'<br>';
                $level++;
                recursScanDir($fullPath,$level);
            }else{
                echo $iconLevel. $iconFail.$item.'<br>';
            }
            unset($iconLevel);
        }

    }

}

recursScanDir($startDir,$level);