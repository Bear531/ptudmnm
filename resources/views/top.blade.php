<html>
<head>
    <title>Top Movies</title>
</head>
<body>
    <h2>Top 10 phim có điểm cao nhất</h2>

    @foreach($movies as $row)
        Tên phim: {{$row->movie_name}} <br>
        Ngày phát hành: {{$row->release_date}} <br>
        Điểm: {{$row->vote_average}} <br>
        <hr>
    @endforeach

</body>
</html>