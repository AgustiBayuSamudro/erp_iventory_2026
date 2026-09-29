<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="page-transition">

    <div class="flex justify-center items-center min-h-screen">
        <div class="gap-4 grid grid-cols-3 max-w-2xl w-full">

            @foreach($users as $user)
            <div class="p-2 shadow-md border-1 rounded-lg hover:scale-103 transaction duration-200">
                <h1>Username : {{$user->username}}</h1>
                <h1>Email : {{$user->email}}</h1>
                <h1>Nomer Hanphone : {{$user->nomer_telp}}</h1>
                <h1>Gender : {{$user->gender}}</h1>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>