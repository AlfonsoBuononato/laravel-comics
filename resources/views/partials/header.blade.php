<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{asset("images/dc-logo.png")}}" alt="">
            </div>
            <ul>
                <li><a class="{{request()->is('/') ? 'active' : ''}}" href="/">COMICS</a></li>
                <li><a class="{{request()->is('news.blade.php') ? 'active' : ''}}" href="/news.blade.php">NEWS</a></li>
            </ul>
        </div>
    </header>
</body>
</html>
