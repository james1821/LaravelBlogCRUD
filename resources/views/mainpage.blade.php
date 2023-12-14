<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex-class">
        <p>Logged In</p>
    <form action="/logout" method="POST">
    @csrf
    <button class="btn-danger">logout</button>
    </form>
    </div>
</body>
</html>