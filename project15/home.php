<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class = "d-inline-block "><h6 class = "">Bộ NN & PTNT <br>Đại học thủy lợi</h6></div>
      <div class = "container d-flex justify-content-center"><h2>Danh sách tổng hợp kết quả thi của thí sinh</h2></div>
      <div class = "container-fluid">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Số thứ tự </th>
      <th scope="col">Số báo danh</th>
      <th scope="col">Mã bài thi</th>
      <th scope="col">Ngày thi </th>
      <th scope="col">Giờ nộp bài  </th>
      <th scope="col">Điểm thi </th>
      <th scope="col">Tập kết quả </th>
      <th scope="col">Kí Tên</th>
    <tr>
</thead>
<tbody>
     <?php
     $dir = 'C:\xampp\htdocs\project15\result';
     $files = array_slice(scandir($dir),3);
     for($i =0; $i< count($files);++$i){
         echo "<tr>";
         echo"     <td>".$i."</td>";
         echo"     <th>".explode("_",$files[$i])[3]."</th>";
         echo"     <th>".explode("_",$files[$i])[2]."</th>";
         echo"     <th>".explode("_",$files[$i])[4]."</th>";
         echo"     <th>".explode("_",$files[$i])[5]."</th>";
         echo"     <th>".explode("_",$files[$i])[6]."</th>";
         echo'<td><a href="view.php?file='.'result/'.$files[3].'">'.'result/'.$files[3].'</a></td>';
         echo"     <td></td>";
        echo"</tr>";
     } 
     ?>
  </tbody>
</table>
  </body>
</html>