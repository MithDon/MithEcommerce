@extends("master")
@section('content')
<form action="fileupload_data" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" class="form-control" name="type"><br><br>
<input type="file" class="form-control" name="file" id=""><br><br>
<input type="submit" class="btn" value="Submit"><br><br>

</form>
@endsection
