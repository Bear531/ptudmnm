<html>
<head>
</head>
<body>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>STT </th>
            <th>Tiêu đều</th>
            <th>Nhà xuất bản</th>
            <th>Tác giả</th>
            <th>Giá bán</th>
            <th>Hình ảnh sách</th>
</tr>
    @foreach($sach as $row)    
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->tieu_de}}</td> 
            <td>{{$row->tieu_de}}</td>
            <td>{{$row->tac_gia}}</td>     
            <td>{{$row->gia_ban}}</td> 
            <td><img src='{{$row->link_anh_bia}}' width='100px'></td> 
        </tr>
     @endforeach
</table>
</body>
</html>

