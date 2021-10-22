<?php
//Đọc và hiển thị danh sách tệp tin bên trong thu mục result
$files = scandir('result/');//$files là  1 mảng
foreach($files as $file){
    echo $file.'<br>';
}

//Lấy ra 1 tệp tin bất kỳ
$file_1 = $files[2];
echo $file_1;//Mỗi tên tệp đang là 1 chuỗi > Tách chuỗi này ra để lấy các thành phần khác nhau
echo '<br>';

$items = explode('_',$file_1);
foreach($items as $item){
    echo $item.'<br>';
}
echo'<br>';
$mark = explode('.',$items[6])[0];
echo $mark;

echo'<br>';

$path = 'result/'.$file_1;
echo '<a'
?>