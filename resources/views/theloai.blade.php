<html>
<head>
</head>
<body>    
    @foreach($the_loai_sach as $row)    
        {{$row->id}} 
        {{$row->ten_the_loai}} <br>
     @endforeach

</body>
</html>

