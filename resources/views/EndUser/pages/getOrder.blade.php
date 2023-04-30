<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
        }
        a{
            padding: 15px 20px;
            text-decoration: none;
            background-image: linear-gradient(102deg ,black,black,red);
            font-size: 30px;
            font-style: italic;
            color: gold;
        }
    </style>
</head>
<body>
<div>
    <a href="{{route('endUser.invoice')}}" >Click here to view the bill</a>
</div>
</body>
</html>
