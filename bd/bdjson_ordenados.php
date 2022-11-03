<?php 

    $url2 = __DIR__.'\JsonBooks.json';
    $array2 = json_decode(file_get_contents($url2),true);

    array_multisort(array_column($array2, 'BookRating'), SORT_DESC, $array2);

    $array2 = array_slice($array2, 0, 4);

    if(!empty($array2)){
        echo json_encode($array2);
    }else{
        echo json_encode([]);
    }

?>