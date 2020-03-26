<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Data</title>
</head>
<body>
    
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
        <input type="file" name="file">
        <input type="submit" value="upload"> <br> <br>
    </form>

</body>
</html>