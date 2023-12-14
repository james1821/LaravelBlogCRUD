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
       
        <div class="flex-class gap-5">
            <h1 class="text-3xl">My posts</h1>
            @foreach($posts as $post)
                <div class="bg-gray-300 w-full h-full">
                    <h3 class="text-2xl text-center">{{$post['title']}}</h3>
                    <h3 class="text-xl text-center">Date: {{ \Carbon\Carbon::parse($post['created_at'])->format('jS \of F Y h:i:s A') }}</h3>
                    <p>{{$post['body']}}</p>
                    <a href="/edit-post/{{ $post->id }}" class="btn-warning">Update</a>
                <form action="/delete-post/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn-danger">Delete</button>
                </form>
                </div>
            @endforeach
        </div>

        <a href="{{ url('createpost') }}" class="btn-primary">Create A New Post</a>

    </div>

   
</body>
</html>