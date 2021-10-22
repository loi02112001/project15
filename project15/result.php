<?php
$file = scandir('result/');
foreach($files as $file){
    echo $file.'<br>';
}
$file_1 = $file[2];
echo $file_1;
echo '<br>';

$items = explode('_',$file_1);
foreach($items as $item){
    echo $item.'<br>';
}
?>