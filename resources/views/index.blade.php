<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h3>Ini adalah tampilan home</h3>
    <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>