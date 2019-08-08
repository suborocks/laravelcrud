<!DOCTYPE html>
<html>
<head>
	<title>EncView</title>
</head>
<body>
	@csrf
	<table border="5">
		<tr>
			<td>SN</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
		@foreach($data as $datas)
		<tr>
			<td>{{$datas->id}}</td>
			<td>{{$datas->name}}</td>
			<td>
				<a href='{{url("/encedit/{$datas->id}")}}' class="btn btn-success">Edit</a>|
                <a href='{{URL("/encdelete/{$datas->id}")}}' class="btn btn-danger">Delete</a>|
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>