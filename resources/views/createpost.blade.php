<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Posts</title>
    @vite('resources/css/app.css')
</head>
<body>
    @auth

    <div class="flex-class">
        <h1 class="text-3xl">Create a New Post</h1>
        <form class="flex-class" action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Title">
            <textarea name="body" type="text" placeholder="Body"></textarea>
            <button class="btn-primary m-2">Create a New Post</button>
        </form>   
    </div>
    
    @else

   @include('login');

    @endauth
    
</body>
</html>