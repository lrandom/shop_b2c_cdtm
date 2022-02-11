<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('admin.do-login')}}">
    @csrf
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
    <br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button>Submit</button>
</form>
</body>
</html>
