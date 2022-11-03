<?php 

    $url = __DIR__.'\JsonBooks.json';
    $array = json_decode(file_get_contents($url),true);

    if(!empty($array)){
        echo json_encode($array);
    }else{
        echo json_encode([]);
    }
?>