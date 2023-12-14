<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    @auth

    @include('mainpage')
    
    @else

    <div class="flex-class">
        <h1 class="text-3xl">REGISTER</h1>
        <form class="flex-class" action="/register" method="POST">
            @csrf
            <input name="name"  type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button class="btn-primary m-2">Register</button>
        </form>
        <a href="{{ url('login') }}">Click Here if you already have an account!</a>
    </div>
    
    @endauth
   
</body>
</html>