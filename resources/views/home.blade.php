<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>
<body>
    @auth
    <div class="flex-class">
        <p>Logged In</p>
    <form action="/logout" method="POST">
    @csrf
    <button class="">logout</button>
    </form>
    </div>
    
    @else

    @endauth
    <div class="flex-class">
        <h1 class="text-3xl">REGISTER</h1>
        <form class="flex-class" action="/register" method="POST">
            @csrf
            <input name="name"  type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button class="btn-primary m-2">Register</button>
        </form>
    </div>
</body>
</html>