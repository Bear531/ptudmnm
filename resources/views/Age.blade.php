<form action="{{url('Age')}}" method = "post">
Năm sinh <input type='text' name='nam_sinh'><br>
<input type='submit' value='Kết quả'>
{{ csrf_field() }}
</form>