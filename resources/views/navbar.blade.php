<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Your App')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="font-sans bg-gray-100">

    <!-- Navigation -->
    <nav class="bg-blue-500 p-4 sticky top-0">
        <div class="container mx-auto flex items-center justify-between">
   

            <div class="space-x-4 md:text-2xl text-sm font-bold flex-class flex-row items-start gap-5">
                <a href="{{ url('/') }}" class="text-white btn-warning">Home</a>
                <a href="{{ url('/allposts') }}" class="text-white btn-success">See All Posts</a>

                    <form action="/logout" method="POST">
                    @csrf
                    <button class="btn-danger">logout</button>
                    </form>
              
            </div>
        </div>
    </nav>

</body>
</html>
