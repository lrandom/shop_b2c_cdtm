<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container mx-auto">
    <img src="{{asset('fe/img/logo.png')}}"/>

    <nav class="flex justify-between">
        <div>
            <a href="">Home</a>
            <a href="">Nữ</a>
            <a href="">Nam</a>
            <a href="">Trẻ em</a>
            <a href="">Thể thao</a>
            <a href="">Classic</a>
        </div>

        <div>
            <input type="search" class="shadow border border-1 border-gray-200 p-2" placeholder="search..."/>
        </div>
    </nav>
</div>
</body>
</html>
