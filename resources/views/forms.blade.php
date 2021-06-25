<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel File Upload </title>
</head>

<body>
    <form action="{{route('forms.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div><input type="file" name="image"></div><br>
        <div><button type="submit">Upload</button></div>
    </form>
</body>

</html>