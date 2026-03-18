<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy danh sách thể loại phim</title>
</head>

<body>
    <h1>Danh sách thể loại phim</h1>
    @php
    foreach ($dsTheLoaiPhim as $row){
    echo $row->genre_name." (".$row->genre_name_vn.")<br>";
    }
    @endphp
</body>

</html>