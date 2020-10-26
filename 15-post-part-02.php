<?php

if(count($_POST)){
    foreach($_POST as $key => $item){
        if(!is_array($item))
            echo "<b>{$key}</b>: {$item}<br/>";
        else {
            echo "<b>Your technologies favorite</b><br/>";
            foreach($item as $k => $i){
                echo "<b>{$k}</b>: {$i}<br/>";
            }
        }
    }
} else {
    echo 'Nothing to show. :/';
}