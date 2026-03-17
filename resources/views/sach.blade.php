<html>
<head>
</head>
<body>    
    @foreach($sach as $row)    
        Tiêu đề sách: {{$row->tieu_de}} <br>
        Tác giả: {{$row->tac_gia}} <br>
     @endforeach

</body>
</html>

