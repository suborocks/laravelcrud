<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/encupdate/'.$data['id']) }}" method="POST">
        @csrf
        Name:<input type="text" name="name" value="{{$data['name']}}">
        <button type="submit" name="update">Update</button>

    </form>
</body>
</html>
