<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobApp</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" value="">
        <input type="password" name="password" value="">
        <input type="submit">
    </form>
</body>
</html>