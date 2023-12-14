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

    <div class="flex-class">
        <h1 class="text-3xl">Create a New Post</h1>
        <form class="flex-class" action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="Title">
            <textarea name="body" type="text" placeholder="Body"></textarea>
            <button class="btn-primary m-2">Create a New Post</button>
        </form>
    </div>

   
</body>
</html>